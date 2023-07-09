<?php

namespace App\Http\Controllers;

// use App\Http\Requests\RegisterRequest;
use App\Models\ApplicantDetail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        $attributes = request()->validate([
            'icnumber' => 'required|max:255|min:12',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:8|max:255',
            'terms' => 'required'
        ]);
        $user = User::create($attributes);
        auth()->login($user);

        return redirect('/user/profile');
    }


    public function updateApplicantDetails(Request $request)
    {
        $user = auth()->user();

        $applicantDetail = ApplicantDetail::where('app_ic', $user->icnumber)->first();

        // If the user does not exist in the 'applicant_details' table, create a new record
        if (!$applicantDetail) {
            $applicantDetail = new ApplicantDetail();
            $applicantDetail->app_ic = $user->icnumber;
        }

        // Calculate app_age from app_birthdate
        $appBirthdate = Carbon::createFromFormat('Y-m-d', $request->app_birthdate);
        $appAge = $appBirthdate->diffInYears(Carbon::now());

        // Update the other fields in 'applicant_details' table
        $applicantDetail->app_name = $request->app_name;
        $applicantDetail->app_birthdate = $request->appBirthdate;
        $applicantDetail->app_age = $appAge;
        $applicantDetail->app_nationality = $request->app_nationality;
        $applicantDetail->app_houseaddress = $request->app_houseaddress;
        $applicantDetail->app_addressLatest = $request->app_addressLatest;
        $applicantDetail->app_jobSector = $request->app_jobSector;
        $applicantDetail->app_jobName = $request->app_jobName;
        $applicantDetail->app_jobSalary = $request->app_jobSalary;
        $applicantDetail->app_marriageStatus = $request->app_marriageStatus;
        $applicantDetail->app_mualafStatus = $request->app_mualafStatus;
        $applicantDetail->app_phoneNumber = $request->app_phoneNumber;
        $applicantDetail->app_nation = $request->app_nation;
        $applicantDetail->app_education = $request->app_education;

        $applicantDetail->save();

        return redirect()->intended('/user/profile')->with('success', "Applicant Details Successfully Updated");
    }
}
