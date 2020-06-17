<?php

namespace App\Auth;

use Illuminate\Auth\Notifications\VerifyEmail;

trait MustVerifyIndividualVerification
{
    /**
     * Determine if the user has verified their email address.
     *
     * @return bool
     */
    public function hasVerifiedIndividualVerification()
    {
    	dd(! is_null($this->finished));
        return ! is_null($this->email_verified_at);
    } 


}