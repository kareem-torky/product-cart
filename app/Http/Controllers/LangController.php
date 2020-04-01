<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LangController extends Controller
{
    public function setAr(Request $request)
    {
        $request->session()->put('lang', 'ar');
        return back();
    }

    public function setEn(Request $request)
    {
        $request->session()->put('lang', 'en');
        return back();
    }
}
