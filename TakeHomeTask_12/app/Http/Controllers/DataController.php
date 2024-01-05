<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DataController extends Controller
{
    public function index()
    {
        $response = Http::get('https://covid19.keponet.com/api/negara/');
        $data = $response->json();
        return view('index', compact('data'));
    }
}
