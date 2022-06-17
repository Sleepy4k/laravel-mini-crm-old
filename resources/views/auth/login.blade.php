@extends('layouts.auth')

@section('title', 'Login')

@section('body')
    <div class="login-logo">
        <a href="{{ route('login') }}">
            <img src="{{asset('admin/images/icon/logo.png')}}" alt="Benjamin4k">
        </a>
    </div>
    <div class="login-form">
        @include('partials.auth.form.login')
    </div>
@endsection