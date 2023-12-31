<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use App\Models\User;
use App\Notifications\ForgotPassword;

/**
 * Summary of ResetPassword
 */
class ResetPassword extends Controller
{
    use Notifiable;

    /**
     * Summary of show
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show()
    {
        return view('auth.reset-password');
    }

    /**
     * Summary of routeNotificationForMail
     * @return mixed
     */
    public function routeNotificationForMail() {
        return request()->email;
    }

    /**
     * Summary of send
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function send(Request $request)
    {
        $email = $request->validate([
            'email' => ['required']
        ]);
        $user = User::where('email', $email)->first();

        if ($user) {
            $this->notify(new ForgotPassword($user->id));
            return back()->with('succes', 'An email was send to your email address');
        }
    }
}
