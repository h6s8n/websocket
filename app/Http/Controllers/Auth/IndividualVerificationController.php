<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Foundation\Auth\VerifiesIndividualVerification;

class IndividualVerificationController extends Controller
{

	use VerifiesIndividualVerification;


	protected $redirectTo = RouteServiceProvider::HOME;


	    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('showForm', 'sendForm');
        $this->middleware('verified');
        $this->middleware('throttle:6,1')->only('showForm', 'sendForm');
        
    }
}
