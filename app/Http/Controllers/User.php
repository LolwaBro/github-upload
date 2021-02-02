<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    function login (Request $request) {
    	
    	$request->validate([
    		'email'=>'required',
    		'password'=>'required'
    	]);

    	$request->session()->put('email',$request->email);

    	echo $request->session()->get('email');

    	return redirect('home');

    }

    function logout (Request $request) {
    	$request->session()->forget('email');
    	return redirect('/');
    }
}
