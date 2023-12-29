<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function submit(Request $request)
    {

        if ($request->username === 'user' && $request->password === 'password') {
            return redirect()->route('index');
        } else {
            return redirect()->route('login.index')->with('error', '1');
        }
    }
}
