<?php

namespace App\Http\Controllers;

use App\Models\Gateway;
use App\Models\Invests;
use App\Models\Plans;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function invests()
    {
        $page_title = 'My Investments';
        $invests = Invests::where('user_id', Auth::User()->id)->get();
        $plan = Plans::all();

        return view('User.Invest.index', compact('page_title', 'invests', 'plan'));
    }

    public function buy_plan()
    {
        $page_title = 'Investment Plans';
        $trx_id = Str::random(12);
        $empty_message = 'No Investment Plans Available';
        $plans = Plans::all();

        return view('User.Invest.invests', compact('page_title', 'plans', 'empty_message', 'trx_id'));
    }

    public function buy_preview(Request $request, $id)
    {
        $page_title = 'Purchase Plan Preview';
        $trx_id = Str::random(12);
        $plans = Plans::find($id);
        $gateway = Gateway::all();

        return view('User.Invest.preview', compact('page_title', 'plans', 'trx_id', 'gateway'));
    }

    public function buy_invest(Request $request, $id)
    {
        // $users = DB::table('users')->where('id', Auth::User()->id)->get();
        $bot = Plans::find($id);
        $validator = Validator::make($request->all(), [
            'amount' => 'required|max:191',
            'trx_id' => 'required|max:191',
            'duration' => 'required|max:191',
            'roi' => 'required|max:191',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->with('errors', $validator->messages());
        } else {
            if ($bot->min > $request->method) {
                return redirect()->back()->with('errors', 'Insufficient Balance, please deposit and try again');
            } else {
                // debit user
                $user = User::find(Auth::user()->id);
                if ($user->bonus == $request->method) {
                    $user->bonus = $user->bonus - $request->amount;
                    $user->update();
                } elseif ($user->rbalance == $request->method) {
                    $user->rbalance = $user->rbalance - $request->amount;
                    $user->update();
                }

                // Create Transaction History
                Transaction::create([
                    'trx_id' => $request->trx_id,
                    'username' => Auth::user()->id,
                    'amount' => $bot->amount,
                    'type' => 'debit',
                    'balance' => $bot->amount,
                    'detail' => 'Trading Bot Purchase',
                ]);

                $inve = new Invests;
                $inve->user_id = Auth::user()->id;
                $inve->plan_id = $request->input('plan_id');
                $inve->amount = $request->input('amount');
                $inve->trx_id = $request->input('trx_id');
                $inve->duration = $request->input('duration');
                $inve->roi = $request->input('roi');
                $inve->status = 'running';
                $inve->time_left = $request->input('time_left');
                $inve->method = $request->input('method');
                //   $inve->image = $filename;

                $inve->save();

                return redirect('user/invests')
                    ->with('success', 'Plan Purchased Successfully');
            }
            // $image=$request->file('image');
            // $filename = $request->file('image')->getClientOriginalName();
            // $image->storeAs('images',$filename,'public');

        }
    }

    public function profile()
    {
        $users = DB::table('users')->where('id', Auth::User()->id)->get();
        $ref = Auth::user()->referrer_id;
        $referrer = DB::table('users')->where('id', $ref)->get('username');

        return view('User.profile', ['users' => $users], compact('referrer'));
    }

    // update personal data

    public function updatepersonal(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->phone = $request->input('phone');

        $user->update();

        return redirect('/user/profile')->with('success', 'Personal Information Updated Successfully');
    }

    public function updateppic(Request $request, $id)
    {

        $validated = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:1024',
        ]);

        $user = User::findOrFail($id);

        $image = $request->file('image');
        $filename = $request->file('image')->getClientOriginalName();
        $image->storeAs('images', $filename, 'public');
        $user->image = $filename;
        $user->update();

        return redirect('/user/profile')->with('success', 'Profile Photo Updated Successfully');
    }

    public function updatepwrd(Request $request, $id)
    {
        $pass1 = $request->input('password');
        $pass2 = $request->input('cpassword');
        $validator = Validator::make($request->all(), [
            'password' => 'required|max:191',
        ]);

        if ($validator->fails()) {
            return redirect('/user/profile')->with('errors', $validator->messages());
        } elseif ($pass2 !== $pass1) {
            return redirect('/user/profile')->with('errors', 'Password Does Not Match');
        } else {
            $user = User::findOrFail($id);

            $user->password = Hash::make($request->input('password'));
            $user->update();

            return redirect('/user/profile')->with('success', 'Password Updated Sucessfully');
        }
    }

    public function viewdownlines()
    {
        $downlines = DB::table('users')->where('referrer_id', Auth::User()->id)->get();
        $page_title = 'Downlines';

        return view('User.downlines', compact('downlines', 'page_title'));
    }
}
