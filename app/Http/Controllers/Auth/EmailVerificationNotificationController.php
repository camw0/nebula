<?php

namespace Nebula\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Nebula\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Nebula\Providers\RouteServiceProvider;

class EmailVerificationNotificationController extends Controller
{
    /**
     * Send a new email verification notification.
     */
    public function store(Request $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(RouteServiceProvider::HOME);
        }

        $request->user()->sendEmailVerificationNotification();

        return back()->with('status', 'verification-link-sent');
    }
}
