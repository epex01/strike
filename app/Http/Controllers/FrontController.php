<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    public function home()
    {
        return view('Front.home');
    }

    public function contact()
    {
        $page_title = 'Contact Us';

        return view('Front.contact', compact('page_title'));
    }

    public function about()
    {
        $page_title = 'About Us';

        return view('Front.about', compact('page_title'));
    }

    public function contactform(Request $request)
    {

        $details = [
            'message' => $request->input('message'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
        ];

        Mail::to('info@crypto-arbtool.com')
            ->send(new \App\Mail\ContactMail($details));

        return redirect()->back()->with('success', 'Contact Form Submited');
    }

    public function buysell()
    {
        return view('Front.buysell');
    }

    public function marketdata()
    {
        return view('Front.marketdata');
    }

    public function tos()
    {
        return view('Front.tos');
    }
}
