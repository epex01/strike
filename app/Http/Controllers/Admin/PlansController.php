<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invests;
use App\Models\Plans;
use App\Models\Transaction;
use App\Models\User;
use App\Models\UserBot;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PlansController extends Controller
{
    public function user_plans()
    {
        $page_title = 'User Investment Plans';
        $empty_message = 'No Investment Plans Available';
        $u_invests = Invests::all();

        return view('Admin.Plans.userplans', compact('page_title', 'u_invests', 'empty_message'));
    }

    public function index()
    {
        $page_title = 'Investment Plans';
        $empty_message = 'No Investment Plans Available';
        $plans = Plans::all();

        return view('Admin.Plans.index', compact('page_title', 'plans', 'empty_message'));
    }

    public function create(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:191',
            'min' => 'required|max:191',
            'max' => 'required|max:191',
            'duration' => 'required|max:191',
            'roi' => 'required|max:191',
        ]);
        if ($validator->fails()) {
            return redirect('admin/plans/')
                ->with('errors', $validator->messages());
        } else {
            if ($request->input('duration') == 1) {
                $duration = 'Daily';
            } elseif ($request->input('duration') == 7) {
                $duration = 'Weekly';
            } elseif ($request->input('duration') == 30) {
                $duration = '1 Month';
            } elseif ($request->input('duration') == 90) {
                $duration = '3 Months';
            } elseif ($request->input('duration') == 180) {
                $duration = '6 Months';
            } elseif ($request->input('duration') == 360) {
                $duration = '1 Year';
            }

            $plan = new Plans;
            $plan->name = $request->input('name');
            $plan->min = $request->input('min');
            $plan->max = $request->input('max');
            $plan->duration = $duration;
            $plan->roi = $request->input('roi');
            $plan->time_left = $request->input('duration');

            $plan->save();

            return redirect('admin/plans/')
                ->with('success', 'Plan Created');
        }

    }

    public function edit(Request $request, $id)
    {
        $page_title = 'Edit Plans';
        $empty_message = 'No Investment Plans Available';

        $plan = DB::table('plans')->where('id', $id)->get();

        return view('Admin.Plans.edit', compact('plan', 'page_title', 'empty_message'))
            ->with('plans', $plan);

    }

    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:191',
            'min' => 'required|max:191',
            'max' => 'required|max:191',
            'duration' => 'required|max:191',
            'roi' => 'required|max:191',

        ]);

        if ($validator->fails()) {
            return redirect('admin/plans/')
                ->with('errors', $validator->messages());
        } else {
            if ($request->input('duration') == 1) {
                $duration = 'Daily';
            } elseif ($request->input('duration') == 7) {
                $duration = 'Weekly';
            } elseif ($request->input('duration') == 30) {
                $duration = '1 Month';
            } elseif ($request->input('duration') == 90) {
                $duration = '3 Months';
            } elseif ($request->input('duration') == 180) {
                $duration = '6 Months';
            } elseif ($request->input('duration') == 360) {
                $duration = '1 Year';
            }

            $uplan = Plans::findorfail($id);
            $uplan->name = $request->input('name');
            $uplan->min = $request->input('min');
            $uplan->max = $request->input('max');
            $uplan->duration = $duration;
            $uplan->roi = $request->input('roi');
            $uplan->time_left = $request->input('duration');

            $uplan->update();

            return redirect('admin/plans/')
                ->with('success', 'Plan Updated');
        }

    }

    public function delete($id)
    {
        $dplan = Plans::findOrFail($id);
        $dplan->delete();

        return redirect('/admin/plans')->with('success', 'Plan Deleted');
    }

    public function executeall()
    {

        $transactions = DB::table('invests')->where('status', 'running')->get();
        $bots = UserBot::where('status', 'running')->get();
        if ($bots) {
            for ($j = 0; $j < count($bots); $j++) {
                $profit = ($bots[$j]->profit / 100) * $bots[$j]->amount;
                $theuser = $bots[$j]->user_id;
                $time_left = $bots[$j]->id;

                // Credit User
                $currentuser = User::find($theuser);
                $temp = $currentuser->profit + $profit;
                $currentuser->profit = $currentuser->profit + $profit;
                $currentuser->update();

                // create Transaction History
                $history = new Transaction;
                $history->trx_id = Str::random(12);
                $history->username = $theuser;
                $history->amount = $profit;
                $history->type = 'Credit';
                $history->balance = $currentuser->profit;
                $history->detail = 'Bot Trade Profit Earned at '.Carbon::now();
                $history->save();

                // reduce time
                $time = UserBot::find($time_left);
                $time->time_left = $time->time_left - 1;
                $time->update();
                if ($time->time_left < 1) {
                    $time->status = 'completed';
                    $time->time_left = 0;
                    $time->update();
                }

            }
        }

        if ($transactions) {
            for ($i = 0; $i < count($transactions); $i++) {
                $profit = ($transactions[$i]->roi / 100) * $transactions[$i]->amount;
                $userid = $transactions[$i]->user_id;
                $time_left = $transactions[$i]->id;

                $user = User::find($userid);
                // $temp = $user->profit + $profit;
                $user->profit = $user->profit + $profit;

                $user->update();

                // create Transaction History
                $history = new Transaction;
                $history->trx_id = Str::random(12);
                $history->username = $userid;
                $history->amount = $profit;
                $history->type = 'Credit';
                $history->balance = $user->profit;
                $history->detail = 'ROI Earned at '.Carbon::now();
                $history->save();

                // reduce time
                $time = Invests::find($time_left);
                $duration = $time->time_left - 1;
                $time->time_left = $time->time_left - 1;
                $time->update();
                if ($time->time_left < 1) {
                    $time->status = 'completed';
                    $time->time_left = 0;
                    $time->update();
                }
            }
        }

    }

    public function viewplandetails($id)
    {
        $plan = Invests::find($id);
        $user = User::find($plan->user_id);
        $invest = Plans::find($plan->plan_id);

        return view('Admin.Plans.view', compact('plan', 'user', 'invest'));

    }

    public function approveplandetails($id)
    {
        $plan = Invests::find($id);
        $user = User::find($plan->user_id);
        $plan->status = 'running';
        $plan->update();

        $reff = User::find($user->referrer_id);

        if ($reff != null) {

            // give ref bonus

            $ref_bonus = (5 / 100) * $plan->amount;
            $bonus = $reff->bonus + $ref_bonus;

            $reff->bonus = $bonus;
            $reff->update();

            // create History
            $history = new Transaction;
            $history->trx_id = Str::random(12);
            $history->username = $reff->id;
            $history->amount = $ref_bonus;
            $history->type = 'Credit';
            $history->balance = $bonus;
            $history->detail = 'Referrer Bonus Earned for '.$user->firstname.' '.$user->lastname;
            $history->save();

        }

        return redirect('admin/userplans')
            ->with('success', 'Plan Approved');
    }

    public function rejectplandetails($id)
    {
        $plan = Invests::find($id);

        $plan->status = 'rejected';
        $plan->update();

        // refund User
        $user = User::find($plan->user_id);
        $user->rbalance = $user->rbalance + $plan->amount;
        $user()->update();

        // create History
        $history = new Transaction;
        $history->trx_id = Str::random(12);
        $history->username = $user->id;
        $history->amount = $plan->amount;
        $history->type = 'Credit';
        $history->balance = $user->rbalance;
        $history->detail = 'Refund from plan cancelation by admin';
        $history->save();

        // Create Transaction History
        return redirect('admin/userplans')
            ->with('success', 'Plan Rejected');
    }
}
