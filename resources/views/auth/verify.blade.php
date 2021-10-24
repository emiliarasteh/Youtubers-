@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8  m-5">
            <div class="card" style="background-color: #222627;">
                <div class="card-header text-right">{{ __('تایید آدرس ایمیل') }}</div>

                <div class="card-body text-right">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('.قبلا ایمیلی حاوی لینک تایید برای شما ارسال شده است') }}
                        </div>
                    @endif

                    {{ __('.لطفا ابتدا آدرس ایمیل خود را تایید کنید') }}
                    {{ __('.در صورت عدم دریافت ایمیل تایید، بر روی لینک زیر کلیک کنید') }}
                    <form  class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('برای درخواست مجدد کلیک کنید') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
