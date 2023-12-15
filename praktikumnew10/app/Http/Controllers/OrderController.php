<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function showFormPesan()
    {
        return view('pendataan');
    }

    public function submitOrder(Request $request)
    {
        $data = [
            'nik' => $request->input('nik'),
            'name' => $request->input('name'),
            'province' => $request->input('province'),
            'city' => $request->input('city'),
            'number' => $request->input('number'),
        ];

        return view('dashboardAdmin', compact('data'));
    }
}
