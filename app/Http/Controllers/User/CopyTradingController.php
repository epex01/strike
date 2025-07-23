<?php

namespace App\Http\Controllers\User;

use App\Models\CopyTrading;
use App\Models\UserTraders;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class CopyTradingController extends Controller
{
    public function traders()
    {
        $traders = CopyTrading::where('status', 'active')->get();
        return view('User.copytrading.traders', ['traders' => $traders]);
    }

    public function myTrades()
    {
        $trades = UserTraders::where('user_id', auth()->id())->get();
        return view('User.copytrading.trades', ['trades' => $trades]);
    }

    public function previewTrader($id)
    {
        $trx_id = Str::random(12);
        $trader = CopyTrading::find(decrypt($id));
        return view('User.copytrading.preview', ['trader' => $trader, 'trx_id' => $trx_id]);
    }

    public function purchaseTrade(Request $request, $id)
    {
        $trader = CopyTrading::find(decrypt($id));
        // Check if user has enough balance
        if ($request->method == 'profit') {
            if (auth()->user()->profit < $request->amount) {
                return redirect()->back()->with('error', 'Insufficient balance');
            } else {
                // Deduct balance from user
                auth()->user()->update([
                    'profit' => auth()->user()->profit - $request->amount
                ]);
            }
        } elseif ($request->method == 'balance') {
            if (auth()->user()->rbalance < $request->amount) {
                return redirect()->back()->with('error', 'Insufficient balance');
            } else {
                // Deduct balance from user
                auth()->user()->update([
                    'rbalance' => auth()->user()->rbalance - $request->amount
                ]);
            }
        } elseif ($request->method == 'bonus') {
            if (auth()->user()->bonus < $request->amount) {
                return redirect()->back()->with('error', 'Insufficient balance');
            } else {
                // Deduct balance from user
                auth()->user()->update([
                    'bonus' => auth()->user()->bonus - $request->amount
                ]);
            }
        }


        // Create trade for user
        UserTraders::create([
            'user_id' => auth()->id(),
            'copy_trading_id' => $trader->id,
            'amount' => $request->amount,
            'profit' => ($trader->profit_percentage / 100) * $request->amount,
            'status' => 'active'
        ]);

        //create transaction
        Transaction::create([
            'trx_id' => $request->trx_id,
            'username' => auth()->id(),
            'amount' => $request->amount,
            'type' => 1,
            'balance' => Auth::user()->rbalance,
            'detail' => 'debit'
        ]);
        return redirect()->route('my.traders')->with('success', 'Trade purchased successfully');
    }
    
     public function checktrade()
    {
        $trades = UserTraders::where('status', 'active')->get();
        foreach ($trades as $key => $value) {
            $profit = $value->trader->profit_percentage;
            $profit_margin = rand(-$profit, $profit);
            $userprofit = $value->amount * ($profit_margin / 100);
            $value->update([
                'profit' => $userprofit,
                'profit_margin' => $profit_margin
            ]);
        }
        return response()->json(['success' => 'Trade checked successfully']);
    }
    
    public function closeTrade($id)
    {
        $trade = UserTraders::find(decrypt($id));
        if ($trade->profit_margin > 0) {
            $trade->update([
                'status' => 'won'
            ]);
            $user = auth()->user();
            $user->profit = $user->profit + $trade->profit + $trade->amount;
            $user->update();

            //Create Transaction
            Transaction::create([
                'trx_id' => Str::random(12),
                'username' => $user->id,
                'amount' => $trade->profit + $trade->amount,
                'type' => 1,
                'balance' => $user->profit,
                'detail' => 'credit'
            ]);
        } else {
            $trade->update([
                'status' => 'loss'
            ]);

            $trade->update([
                'status' => 'won'
            ]);
            $user = auth()->user();
            $user->profit = $user->profit + ($trade->amount - $trade->profit);
            $user->update();

            //Create Transaction
            Transaction::create([
                'trx_id' => Str::random(12),
                'username' => $user->id,
                'amount' => $trade->amount - $trade->profit,
                'type' => 1,
                'balance' => $user->profit,
                'detail' => 'credit'
            ]);
        }
        return back()->with('success', 'Trade closed successfully');
    }
}
