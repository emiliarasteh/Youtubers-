@extends('layouts.master')

@section('content')
    <div class="vizew-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i>
                                    Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Login</li>
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

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                       id="email" placeholder="Email or User Name">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" id="password" placeholder="Password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="remember">
                                        {{ __('مرا به خاطر بسپار') }}
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn vizew-btn w-100 mt-30">ورود</button>
                            <div class="row">
                                <div class="col-md-6">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('رمز عبور خود را فراموش کرده اید؟') }}
                                        </a>
                                    @endif
                                </div>
                                <div class="col-md-6 text-right">
                                    <a class="btn btn-link" href="{{ route('register') }}">
                                       ثبت نام
                                    </a>
                                </div>
                            </div>



                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

