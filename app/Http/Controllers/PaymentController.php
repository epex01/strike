<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\Gateway;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PaymentController extends Controller
{
    public function deposit()
    {
        $page_title = 'Deposit Methods';
        $gateway = Gateway::all();

        return view('User.Deposit.deposit', compact('page_title', 'gateway'));
    }

    public function depositconfirm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'amount' => 'required',
            'method' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:1024',
        ]);
        $user = DB::table('users')->where('id', Auth::User()->id)->get();

        $amount = $request->input('amount');

        $image = $request->file('image');
        $filename = $request->file('image')->getClientOriginalName();
        $image->storeAs('images', $filename, 'public');

        $depo = new Deposit;
        $depo->user_id = Auth::user()->id;
        $depo->username = Auth::user()->username;
        $depo->trx_id = Str::random(12);
        $depo->amount = $request->input('amount');
        $depo->method = $request->input('method');
        $depo->status = 'pending';
        $depo->image = $filename;

        $depo->save();

        return redirect('/user/deposit/history')->with('success', 'Deposit request sent');
    }

    public function deposithistory()
    {
        $page_title = 'Deposit History';
        $user = DB::table('users')->where('id', Auth::User()->id)
            ->get();
        $deposit = DB::table('deposits')->where('user_id', Auth::User()->id)->get();

        return view('User.Deposit.deposit_history', compact('page_title', 'deposit'));
    }
}
