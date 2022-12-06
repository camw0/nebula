<?php

namespace Nebula\Http\Controllers\Auth;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Nebula\Http\Controllers\Controller;
use Nebula\Providers\RouteServiceProvider;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     */
    public function __invoke(Request $request): mixed
    {
        return $request->user()->hasVerifiedEmail()
                    ? redirect()->intended(RouteServiceProvider::HOME)
                    : Inertia::render('Auth/VerifyEmail', ['status' => session('status')]);
    }
}
