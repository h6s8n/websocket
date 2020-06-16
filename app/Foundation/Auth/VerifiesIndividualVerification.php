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
    	return view('auth.security');
    	
    }


    public function showForm(Request $request)
    {
    	dd("showform");
    }


    public function sendForm(Request $request)
    {
    	dd("sendform");
    }

}