<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('Admin.Auth.login', [
            'title' => 'Admin Login',
            'loginRoute' => 'admin.login',
            'forgotPasswordRoute' => 'admin.password.request',
        ]);
    }

    /**
     * Login the admin.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $this->validator($request);

        if (Auth::guard('admin')->attempt($request->only('email', 'password'), $request->filled('remember'))) {
            // Authentication passed...
            return redirect()
                ->intended(route('admin.home'))
                ->with('status', 'You are Logged in as Admin!');
        }

        // Authentication failed...
        return $this->loginFailed();
    }

    /**
     * Logout the admin.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect()
            ->route('admin.login')
            ->with('status', 'Admin has been logged out!');
    }

    /**
     * Validate the form data.
     */
    private function validator(Request $request)
    {
        // validation rules.
        $rules = [
            'email' => 'required|email|exists:admins|min:5|max:191',
            'password' => 'required|string|min:4|max:255',
        ];

        // custom validation error messages.
        $messages = [
            'email.exists' => 'These credentials do not match our records.',
        ];

        // validate the request.
        $request->validate($rules, $messages);
    }

    /**
     * Redirect back after a failed login.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    private function loginFailed()
    {
        return redirect()
            ->back()
            ->withInput()
            ->with('error', 'Login failed, please try again!');
    }
}
