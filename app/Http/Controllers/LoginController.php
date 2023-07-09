<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Summary of LoginController
 */
class LoginController extends Controller
{
    /**
     * Display login page.
     *
     * @return Renderable
     */
    public function show()
    {
        return view('auth.login');
    }

    /**
     * Summary of login
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();
            
            if ($user->role === 'Applicant') {
                return redirect()->intended('/user/profile');
            } elseif ($user->role === 'Staff') {
                return redirect()->intended('/staff/profile');
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }


    /**
     * Summary of logout
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
