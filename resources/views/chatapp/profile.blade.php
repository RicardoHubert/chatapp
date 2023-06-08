@extends('index')
@section('profile')
<div class="tyn-content  tyn-content-page">
    <div class="tyn-main tyn-content-inner" id="tynMain">
        <div class="container">
            <div class="tyn-profile">
                <div class="tyn-profile-nav">
                    <ul class="nav nav-tabs nav-tabs-line">
                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit" type="button"> Edit Profile </button>
                        </li>
                    </ul>
                </div><!-- .tyn-profile-nav -->
                <div class="tyn-profile-details">
                    <div class="tab-content">
                        <div class="tab-pane show active" id="profile-edit" tabindex="0">
                            <div class="row gy-5">
                                <div class="col-12">
                                    <div class="row gy-4">
                                        <div class="col-lg-3">
                                            <h6>Personal Information</h6>
                                            <div class="tyn-subtext">Edit Your personal Info</div>
                                        </div>
                                        <form action="{{ route('dash.profile_validation') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                        <div class="col-lg-10 mx-auto">
                                            <div class="row g-gs">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="firstName">Username</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="name" id="firstName" placeholder="Your Username" value="{{ $data->name }}">
                                                            @if ($errors->has('name'))
                                                                <span class="small ms-2 text-danger">{{ $errors->first('name') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div><!-- .col -->
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="lastName">Password</label>
                                                        <div class="form-control-wrap">
                                                            <input type="password" class="form-control" name="password" id="lastName" placeholder="Your Password" value="">
                                                        </div>
                                                    </div>
                                                </div><!-- .col -->
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label d-flex" for="primaryEmail">Main Email <span class="small ms-2 text-success">Varified</span></label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="email" id="primaryEmail" placeholder="Primary Email" value="{{ $data->email }}">
                                                            @if ($errors->has('email'))
                                                                <span class="small ms-2 text-danger">{{ $errors->first('email') }}</span>
                                                            @endif
                                                        </div>
                                                        <div class="tyn-subtext mt-2">You need to have at least one email connected with your account</div>
                                                    </div>
                                                </div><!-- .col -->
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="image">Photo Profile</label>
                                                        <div class="form-control-wrap">
                                                            <input type="file" class="form-control" name="user_image" id="image">
                                                            @if ($errors->has('user_image'))
                                                                <span class="small ms-2 text-danger">{{ $errors->first('user_image') }}</span>
                                                            @endif
                                                            <br/>
                                                            @if ($data->user_image != '')
                                                                <img src="{{ asset('/frontasset/images/avatar/'.$data->user_image) }}" width="150" class="img-thumbnail" />
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div><!-- .col -->
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <button class="btn btn-sm btn-primary ms-2">Save</button>
                                                    </div>
                                                </div>
                                            </div><!-- .row -->
                                        </div><!-- .col -->
                                        </form>
                                    </div><!-- .row -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .tab-pane -->
                    </div><!-- .tab-content -->
                </div><!-- .tyn-profile-details -->
            </div><!-- .tyn-profile -->
        </div><!-- .container -->
    </div><!-- .tyn-main -->
</div>
@endsection
