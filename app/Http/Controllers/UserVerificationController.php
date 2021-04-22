<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class UserVerificationController extends Controller
{
    public function verifyView() {
        return view('auth.verify-email');
    }

    public function verifyRedirect(EmailVerificationRequest $request) {
        $request->fulfill();
    
        return redirect('/')->with('messageVerify', __('ui.linkEmail'));

    }

    public function reVerify(Request $request) {
        $request->user()->sendEmailVerificationNotification();
    
        return redirect('/')->with('reMessage', __('ui.verifyLink'));
    }
}
