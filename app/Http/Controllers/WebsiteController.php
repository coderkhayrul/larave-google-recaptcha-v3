<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required|recaptchav3:captcha,0.5'
        ]);
        return redirect()->back()->with('success','Your message has been sent successfully');

    }
}
