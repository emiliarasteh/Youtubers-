@extends('layouts.master')

@section('content')
    <div class="vizew-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i>
                                    خانه</a></li>
                            <li class="breadcrumb-item active" aria-current="page">ثبت نام</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Login Area Start ##### -->
    <div class="vizew-login-area section-padding-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">
                    <div class="login-content">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h4>خوش آمدید</h4>
                            <div class="line"></div>
                        </div>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group">
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{ old('name') }}" required
                                       id="name" placeholder="نام">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autofocus
                                       id="email" placeholder="ایمیل یا نام کاربری">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                       name="password"
                                       required id="password" placeholder="رمز عبور">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                       name="password_confirmation" required id="password-confirm"
                                       placeholder="تکرار رمز عبور">
                                @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="custom-control custom-checkbox mr-sm-2 text-right">
                                    <input type="checkbox" class="custom-control-input" id="rules"
                                           name="rules"}}>
                                    <label class="custom-control-label" for="rules">
                                        {{ __('همه شرایط و ضوابط را پذیرفته ام') }}
                                    </label>

                                </div>
                            </div>

                            <button type="submit" class="btn vizew-btn w-100 mt-30">ثبت نام</button>
                            <div class="col-md-6">
                                <a class="btn btn-link" href="{{ route('login') }}">ورود</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

