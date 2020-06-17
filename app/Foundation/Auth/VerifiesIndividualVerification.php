<?php

namespace App\Foundation\Auth;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

trait VerifiesIndividualVerification
{
    public function show(Request $request)
    {
    	return view('auth.security.notice');
    	
    }


    public function showForm(Request $request)
    {
    	return view('auth.security.verify');
    }


    public function sendForm(Request $request)
    {
    	
    }

}