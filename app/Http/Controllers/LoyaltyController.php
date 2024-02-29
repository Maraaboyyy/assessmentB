<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoyaltyController extends Controller
{
    public function showPage1()
    {
        return view('page1');
    }

    public function processPage1(Request $request)
    {
        $phoneNumber = $request->input('phone_number');

        if ($phoneNumber === '173527250') {
            return redirect('/page2');
        } else {
            return redirect('/page1')->with('error', 'Invalid phone number.');
        }
    }

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

    // Redirect to Page 3
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
