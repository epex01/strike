<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Bot;
use App\Models\Transaction;
use App\Models\User;
use App\Models\UserBot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BotController extends Controller
{
    public function index()
    {
        $bot = Bot::where('status', 'active')->get();
        $page_title = 'Trading Bots';

        return view('User.Bot.index', ['bots' => $bot, 'page_title' => $page_title]);
    }

    public function previeworder($id)
    {
        $bot = Bot::find(decrypt($id));
        $trx_id = Str::random(12);

        return view('User.Bot.preview', ['bot' => $bot, 'trx_id' => $trx_id]);
    }

    public function purchasebot(Request $request)
    {
        $bot = Bot::find($request->plan_id);
        if ($bot) {
            // check if account balance is enough
            if ($bot->amount > $request->method) {
                return redirect()->back()->with('errors', 'Insufficient Balance, please deposit and try again');
            } else {
                // debit user
                $user = User::find(Auth::user()->id);
                if ($user->bonus == $request->method) {
                    $user->bonus = $user->bonus - $bot->amount;
                    $user->update();
                } elseif ($user->rbalance == $request->method) {
                    $user->rbalance = $user->rbalance - $bot->amount;
                    $user->update();
                }

                // Create record
                UserBot::create([
                    'user_id' => Auth::user()->id,
                    'bot_name' => $bot->name,
                    'amount' => $bot->amount,
                    'transaction_id' => $request->trx_id,
                    'time_left' => $bot->duration,
                    'profit' => $bot->profit,
                    'status' => 'running',
                ]);

                // Create Transaction History
                Transaction::create([
                    'trx_id' => $request->trx_id,
                    'username' => Auth::user()->id,
                    'amount' => $bot->amount,
                    'type' => 'debit',
                    'balance' => $bot->amount,
                    'detail' => 'Trading Bot Purchase',
                ]);

                return redirect()->route('my.tradingbots')->with('success', 'Bot Purchase Successful');
            }
        }

        return redirect()->back()->with('errors', 'Unable to buy Bot, Please contact admin');
    }

    public function tradingbots()
    {
        $bots = UserBot::where('user_id', Auth::user()->id)->get();

        return view('User.Bot.mybots', ['bots' => $bots]);
    }
}
