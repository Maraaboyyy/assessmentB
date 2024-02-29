<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showPage2()
    {
        return view('page2');
    }
    public function processPage2(Request $request)
{
    $request->session()->put('name', $request->input('name'));
    $request->session()->put('day', $request->input('day'));
    $request->session()->put('month', $request->input('month'));
    $request->session()->put('year', $request->input('year'));
    $request->session()->put('email', $request->input('email'));
    $request->session()->put('noEmail', $request->has('no-email'));

    return redirect()->route('page3');
}


    public function showPage3(Request $request)
    {
        $data = [
            'name' => $request->session()->get('name'),
            'day' => $request->session()->get('day'),
            'month' => $request->session()->get('month'),
            'year' => $request->session()->get('year'),
            'email' => $request->session()->get('email'),
            'noEmail' => $request->session()->get('noEmail'),
        ];

        return view('page3', compact('data'));
    }
}