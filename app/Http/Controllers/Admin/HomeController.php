<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Deposit;
use App\Models\Trade;
use App\Models\User;
use App\Models\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {

        // User Info
        $widget['total_users'] = User::count();
        $widget['total_trades'] = Trade::count();
        $widget['won_trades'] = Trade::where('status', 'won')->count();
        $widget['lose_trades'] = Trade::where('status', 'lose')->count();
        $widget['total_deposits'] = Deposit::count();
        $widget['total_withdrawals'] = Withdraw::count();
        $widget['pending_deposits'] = Deposit::where('status', 'pending')->count();
        $widget['pending_withdrawals'] = Withdraw::where('status', 'pending')->count();

        return view('Admin.dashboard', compact('widget'));
    }

    public function changePassword()
    {
        return view('Admin.Auth.password');
    }

    public function savePassword(Request $request)
    {
        $validated = $request->validate([
            'current_password' => 'required|min:6',
            'password' => 'required|min:6|confirmed',
        ]);

        if (Hash::check($request->current_password, Auth::guard('admin')->user()->password)) {
            $admin = Admin::find(Auth::guard('admin')->user()->id);
            $admin->password = Hash::make($request->password);
            $admin->update();

            return redirect()->back()->with('success', 'Password Changed Successfully');
        } else {
            return redirect()->back()->with('current_password', 'Password is incorrect');
        }
    }
}
