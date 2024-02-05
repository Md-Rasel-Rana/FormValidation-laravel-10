<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class UserRegistration extends Controller
{
    public function userRegistration(){
        return view('FormValidation');
    }
    public function userRegistrationPost(Request $request){
        $validation = $request->validate([
            'FirstName' => 'required|max:100',
            'LastName' => 'required|max:100',
            'Email' => 'required|email',
            'Password' => 'required|min:6|max:100',
        ]);
    
        // Assuming you have a model called Registration that represents user registrations
        Registration::create([
            'FirstName' => $validation['FirstName'],
            'LastName' => $validation['LastName'],
            'Email' => $validation['Email'],
            'Password' => $validation['Password'],
        ]);
        return redirect('/')->with('success', 'User registration successful!');
    }
    
    
}
