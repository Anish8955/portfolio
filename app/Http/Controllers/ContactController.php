<?php

namespace App\Http\Controllers;
use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'mobile' => 'required|string|regex:/^[0-9]{10}$/',
            'message' => 'required'
        ]);
    
        contact::create([
            'email' => $request->email,
            'mobile' => $request->mobile,
            'message' => $request->message
        ]);
        
        return redirect()->route('main')
            ->with('success', 'Your message reached us successfully. Kindly wait for a reply.');
    }

    public function mainpage(){

        return view('main');

    }
}
