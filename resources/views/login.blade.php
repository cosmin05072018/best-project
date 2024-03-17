@extends('layouts/app')
@section('content')
    @push('css')
        <link rel="stylesheet" href="{{asset('css/forms.css')}}">
    @endpush

<div class="login-admin d-flex align-items-center justify-content-center">
    <div class="container bg-white rounded-3 p-5 d-flex justify-content-around align-items-center flex-row h-75">
        <div class="img-login-section">
            <img src="{{asset('images/image.png')}}" alt="img">
        </div>
        <div class="login-section w-50">
            <h1 class="fw-bold text-center mb-5">Login</h1>
            <form action="{{ route('validateLoginForm') }}" method="POST" class="w-100">
                @csrf
                <div class="form-floating d-flex align-items-center">
                    <ion-icon name="mail-sharp" class="email-icon"></ion-icon>
                    <input type="email" class="form-control inputForm" id="floatingInput" placeholder="name@example.com" name="email" value="{{old('email')}}">
                    <label for="floatingInput">Email address</label>
                </div>
                @error('email')
                <div class="mb-3 mx-5 text-danger">
                    {{ $message }}
                </div>
                @enderror

                <div class="form-floating input-field d-flex align-items-center mt-3">
                    <ion-icon class="password-icon" name="eye-off-sharp"></ion-icon>
                    <input type="password" class="form-control inputForm" id="password" placeholder="Password" name="password">
                    <label for="floatingPassword">Password</label>
                </div>
                @error('password')
                <div class="mb-3 mx-5 text-danger">
                    {{ $message }}
                </div>
                @enderror
                <button type="submit" class="submit-form-btn m-auto d-block mt-5 px-5">Submit</button>
            </form>
            <div class="registe-page-link mt-5">
                <p class="text-center">Don't have an account? <a href="{{route('signup')}}" class="link-register">Signup</a></p>
            </div>
        </div>
    </div>
</div>

    @push('js')
        <script src="{{asset('js/generalScript.js')}}"></script>
    @endpush
@endsection
