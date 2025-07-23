<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\CopyTrading;
use App\Models\Transaction;
use App\Models\UserTraders;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CopyTradingController extends Controller
{
    public function traders()
    {
        $traders = CopyTrading::latest()->paginate(50);
        return view('Admin.copytrading.traders', ['traders' => $traders]);
    }

    public function saveTrader(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:copy_tradings,name|max:30',
            'description' => 'required|max:100',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
            'response_rate' => 'required|numeric',
            'profit_percentage' => 'required|numeric',
            'trailer' => 'required|numeric',
            'minimum' => 'required|numeric',
        ]);

        $path = $request->file('image')->store('public/traders');

        CopyTrading::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'image' => $path,
            'response_rate' => $validated['response_rate'],
            'profit_percentage' => $validated['profit_percentage'],
            'trailer' => $validated['trailer'],
            'minumum' => $validated['minimum'],
        ]);
        return redirect()->back()->with('success', 'Trader added successfully');
    }

    public function userTraders()
    {
        $users = UserTraders::latest()->paginate(50);
        return view('Admin.copytrading.usertraders', ['trades' => $users]);
    }

    public function activateTrade($id)
    {
        $trade = CopyTrading::find(decrypt($id));

        if ($trade->status != 'active') {
            $trade->update([
                'status' => 'active'
            ]);
            return back()->with('succes', 'Trade Activated');
        } else {
            return back()->with('error', 'Trade is already active');
        }
    }

    public function deactivateTrade(Request $request, $id)
    {
        $trade = CopyTrading::find(decrypt($id));

        if ($trade->status == 'active') {
            $trade->update([
                'status' => 'deactivated'
            ]);

            //credit users their profit
            $userprofit = UserTraders::where('copy_trading_id', $trade->id)->where('status', 'active')->get();

            foreach ($userprofit as $key => $value) {
                if ($request->trade_outcome == 'win') {
                    $user = User::find($value->user_id);
                    $user->profit = $user->profit + $value->profit + $value->amount;
                    $user->update();
    
                    //close trade
                    $value->update([
                        'status' => 'win'
                    ]);
    
                    //Create Transaction
                    Transaction::create([
                        'trx_id' => Str::random(12),
                        'username' => $user->id,
                        'amount' => $value->profit + $value->amount,
                        'type' => 1,
                        'balance' => $user->profit,
                        'detail' => 'credit'
                    ]);
                }else{
                    //close trade
                    $value->update([
                        'profit' => 0,
                        'status' => 'loss'
                    ]);
                }
            }
            return back()->with('succes', 'Trade Activated');
        } else {
            return back()->with('error', 'Trade is not active');
        }
    }
    
    public function updateTrade(Request $request, $id)
    {
        $trade = CopyTrading::find(decrypt($id));
        $trade->update([
            'profit_percentage' => $request->profit_percentage,
            'minumum' => $request->minimum,
        ]);

        return back()->with('success', 'Trade Updated');
    }
}
