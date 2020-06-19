<?php

namespace App\Foundation\Auth;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Foundation\Auth\RedirectsUsers;

trait VerifiesIndividualVerification
{
	use RedirectsUsers;

    public function show(Request $request)
    {
    	// dd(! is_null($this->email_verified_at));
    	// return ($this->email_verified_at);

        return $request->user()->hasVerifiedIndividualVerification()
                ? redirect($this->redirectPath())
                : view('auth.verify');




        // $files = auth()->user()->files()->latest()->finished()->get();
        // return view('account.files.index', [
        //     'files' => $files
        // ]);

    	// return view('auth.security.notice');
    	
    }


    public function showForm(Request $request)
    {
        // if (!$file->exists) {
        //     $file = $this->createAndReturnSkeletonFile();

        //     return redirect()->route('account.files.create', $file);
        // }

        // $this->authorize('touch', $file);

        // return view('account.files.create', [
        //     'file' => $file
        // ]);
    	return view('auth.security.verify');
    }


    public function sendForm(Request $request)
    {
        // $this->authorize('touch', $file);

        // $file->fill($request->only(['title', 'overview', 'overview_short', 'price']));
        // $file->finished = true;
        // $file->save();

        // return redirect()->route('account.files.index')
        //     ->withSuccess('Thanks, submitted for review.');
    
    }

}