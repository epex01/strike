<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserKYC;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KYCController extends Controller
{
    public function index()
    {
        $kyc = UserKYC::where('user_id', Auth::user()->id)->first();

        return view('User.Kyc.index', ['kyc' => $kyc]);
    }

    public function submitKYC(Request $request)
    {
        $validated = $request->validate([
            'document_type' => 'required',
            'name' => 'required',
            'front' => 'required|mimes:png,jpg,jpeg|size:1024',
            'back' => 'required|mimes:png,jpg,jpeg|size:1024',
        ]);
        $user = UserKYC::where('user_id', Auth::user()->id)->first();

        if ($user) {
            return redirect()->back()->with('errors', 'You have already submited you document, please wait for admin to approve');
        } else {
            $file1 = $request->file('front');
            $passport1 = time() . $file1->getClientOriginalName();
            $file1->move(public_path() . '/uploads/kyc/', $passport1);

            $file2 = $request->file('back');
            $passport2 = time() . $file2->getClientOriginalName();
            $file2->move(public_path() . '/uploads/kyc/', $passport2);

            UserKYC::create([
                'user_id' => Auth::user()->id,
                'id_type' => $request->document_type,
                'name' => $request->name,
                'front' => $passport1,
                'back' => $passport2,
                'status' => 'pending',
            ]);
            $thisuser = User::find(Auth::user()->id);
            $thisuser->kyc_status = 'pending';
            $thisuser->update();

            return redirect()->back()->with('success', 'KYC Document Submited');
        }
    }

    public function kycIndex()
    {
        $user = UserKYC::all();

        return view('Admin.KYC.index', ['user' => $user]);
    }

    public function viewKYC($id)
    {
        $user = UserKYC::find($id);

        return view('Admin.KYC.show', ['user' => $user]);
    }

    public function processKYC($id, Request $request)
    {
        $user = UserKYC::find($id);
        if ($request->action == 'accept') {
            $thisuser = User::find($user->user_id);
            $thisuser->kYC_status = 'approved';
            $thisuser->update();

            $user->status = 'approved';
            $user->update();

            return redirect()->route('admin.kyc.index')->with('success', 'KYC Approved');
        } else {
            $thisuser = User::find($user->user_id);
            $thisuser->kYC_status = 'rejected';
            $thisuser->update();

            $user->delete();

            return redirect()->route('admin.kyc.index')->with('success', 'KYC Rejected');
        }
    }
}
