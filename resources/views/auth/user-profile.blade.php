@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Your Profile'])
    <div class="card shadow-lg mx-4 card-profile-bottom">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="/img/team-1.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            {{ auth()->user()->app_name  ?? ''  }}
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                            Public Relations
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="nav-wrapper position-relative end-0">
                        <ul class="nav nav-pills nav-fill p-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center "
                                    data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                                    <i class="ni ni-app"></i>
                                    <span class="ms-2">App</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center "
                                    data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                                    <i class="ni ni-email-83"></i>
                                    <span class="ms-2">Messages</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center "
                                    data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                                    <i class="ni ni-settings-gear-65"></i>
                                    <span class="ms-2">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="alert">
        @include('components.alert')
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <form method="POST" action="{{ route('update.user') }}">
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Edit Profile</p>
                                <button type="submit" class="btn btn-primary btn-sm ms-auto">Save</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-uppercase text-sm">User Information</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="app_name" class="form-control-label">Full Name</label>
                                        <input class="form-control" type="text" name="app_name"
                                            value="{{ old('app_name', $applicantDetail->app_name)  ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="ic_number" class="form-control-label">IC Number</label>
                                        <input class="form-control" type="text" name="ic_number"
                                            value="{{ old('icnumber', auth()->user()->icnumber)  ?? '' }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="form-control-label">Email address</label>
                                        <input class="form-control" type="email" name="email"
                                            value="{{ old('email', auth()->user()->email)  ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="app_phoneNumber" class="form-control-label">Phone Number</label>
                                        <input class="form-control" type="text" name="app_phoneNumber"
                                            value="{{ old('app_phoneNumber', $applicantDetail->app_phoneNumber)  ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="app_birthdate" class="form-control-label">Date of Birth</label>
                                        <input class="form-control" type="date" name="app_birthdate"
                                            value="{{ old('app_birthdate', $applicantDetail->app_birthdate)  ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="app_nationality" class="form-control-label">Nationality</label>
                                        <input class="form-control" type="text" name="app_nationality"
                                            value="{{ old('app_nationality', $applicantDetail->app_nationality)  ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="app_houseaddress" class="form-control-label">Home Address</label>
                                        <input class="form-control" type="text" name="app_houseaddress"
                                            value="{{ old('app_houseaddress', $applicantDetail->app_houseaddress)  ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="app_addressLatest" class="form-control-label">Current Address</label>
                                        <input class="form-control" type="text" name="app_addressLatest"
                                            value="{{ old('app_addressLatest', $applicantDetail->app_addressLatest)  ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="app_jobSector" class="form-control-label">Job Sector</label>
                                        <input class="form-control" type="text" name="app_jobSector"
                                            value="{{ old('app_jobSector', $applicantDetail->app_jobSector)  ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="app_jobName" class="form-control-label">Job Title</label>
                                        <input class="form-control" type="text" name="app_jobName"
                                            value="{{ old('app_jobName', $applicantDetail->app_jobName)  ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="app_marriageStatus" class="form-control-label">Marital Status</label>
                                        <input class="form-control" type="text" name="app_marriageStatus"
                                            value="{{ old('app_marriageStatus', $applicantDetail->app_marriageStatus)  ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="app_mualafStatus" class="form-control-label">Mualaf Status</label>
                                        <input class="form-control" type="text" name="app_mualafStatus"
                                            value="{{ old('app_mualafStatus', $applicantDetail->app_mualafStatus)  ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="app_nation" class="form-control-label">Nation</label>
                                        <input class="form-control" type="text" name="app_nation"
                                            value="{{ old('app_nation', $applicantDetail->app_nation)  ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="app_education" class="form-control-label">Education Level</label>
                                        <input class="form-control" type="text" name="app_education"
                                            value="{{ old('app_education', $applicantDetail->app_education)  ?? '' }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-profile">
                    <img src="/img/bg-profile.jpg" alt="Image placeholder" class="card-img-top">
                    <div class="row justify-content-center">
                        <div class="col-4 col-lg-4 order-lg-2">
                            <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                                <a href="javascript:;">
                                    <img src="/img/team-2.jpg"
                                        class="rounded-circle img-fluid border border-2 border-white">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
                        <div class="d-flex justify-content-between">
                            <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-none d-lg-block">Connect</a>
                            <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-block d-lg-none"><i
                                    class="ni ni-collection"></i></a>
                            <a href="javascript:;"
                                class="btn btn-sm btn-dark float-right mb-0 d-none d-lg-block">Message</a>
                            <a href="javascript:;" class="btn btn-sm btn-dark float-right mb-0 d-block d-lg-none"><i
                                    class="ni ni-email-83"></i></a>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col">
                                <div class="d-flex justify-content-center">
                                    <div class="d-grid text-center">
                                        <span class="text-lg font-weight-bolder">22</span>
                                        <span class="text-sm opacity-8">Friends</span>
                                    </div>
                                    <div class="d-grid text-center">
                                        <span class="text-lg font-weight-bolder">10</span>
                                        <span class="text-sm opacity-8">Photos</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <h5 class="h3">
                                {{ auth()->user()->firstname ?? 'Firstname' }} {{ auth()->user()->lastname ?? 'Lastname' }}
                            </h5>
                            <div class="h5 font-weight-300">
                                <i class="ni location_pin mr-2"></i>{{ auth()->user()->app_addressLatest ?? 'Address' }}
                            </div>
                            <div class="h5 mt-4">
                                <i class="ni business_briefcase-24 mr-2"></i>{{ auth()->user()->app_jobName ?? 'Job Title' }}
                            </div>
                            <div>
                                <i class="ni education_hat mr-2"></i>{{ auth()->user()->app_education ?? 'Education Level' }}
                            </div>
                            <hr class="my-4" />
                            <p>{{ auth()->user()->app_summary ?? 'Summary' }}</p>
                            <a href="javascript:;">Show more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
