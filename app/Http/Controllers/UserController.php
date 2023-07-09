<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ApplicantDetail;
use Illuminate\Http\Request;
use Carbon\Carbon;

class UserController extends Controller
{

    /**
     * Summary of profile
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function profile()
    {
        $user = auth()->user();
        $applicantDetail = ApplicantDetail::where('app_ic', $user->icnumber)->first();

        return view('auth.user-profile', compact('applicantDetail'));
    }

    /**
     * Summary of staffprofile
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function staffprofile()
    {
        $user = auth()->user();
        $applicantDetail = ApplicantDetail::where('app_ic', $user->icnumber)->first();

        return view('auth.staff-profile', compact('applicantDetail'));
    }
}
