<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class LocalizationController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function lang_change(Request $request)
    {
        dd("rtt");
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);  
        return view('welcome');
    }
}