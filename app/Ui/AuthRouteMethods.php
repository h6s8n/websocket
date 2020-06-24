<?php

namespace App\Ui;

use Laravel\Ui\AuthRouteMethods as MainAuthRouteMethods;

class AuthRouteMethods extends MainAuthRouteMethods 
{
	public static function auth()
    {
    	return function () {
    		
	        if ($options['individualVerify'] ?? false) {
	        	
	                $this->IndividualVerification();
	        }
	    };
    }



    public static function IndividualVerification()
    {
        return function () {
        
         $this->get('security/notice', 'Auth\IndividualVerificationController@show')->name('security.notice');
         $this->get('security/verify', 'Auth\IndividualVerificationController@showForm')->name('security.verify');
         $this->post('security/verify', 'Auth\IndividualVerificationController@sendForm')->name('security.verify');
        };
    }
    // public static function routes(array $options = [])
    // {
    //     static::auth($options);
    // }
    // public static function routes(array $options = [])
    // {
    //     static::$app->make('router')->auth($options);
    // }
}