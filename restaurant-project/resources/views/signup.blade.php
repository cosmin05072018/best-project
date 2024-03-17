@extends('layouts/app')
@section('content')
    @push('css')
        <link rel="stylesheet" href="{{asset('css/forms.css')}}">
    @endpush

    <div class="login-admin d-flex align-items-center justify-content-center">
        <div class="container bg-white rounded-3 d-flex flex-column py-5">
                <h1 class="fw-bold text-center mb-5">Create an account</h1>
                <form action="{{ route('validateSignupForm') }}" method="POST" class="w-100 px-5 mt-5">
                    @csrf
                    <div class="row mb-4">
                        <div class="col-md-6 mb-4">
                            <div class="form-floating d-flex align-items-center">
                                <ion-icon name="person" class="name-icon"></ion-icon>
                                <input type="text" class="form-control inputForm" id="floatingInput" placeholder="Name" name="name" value="{{old('name')}}">
                                <label for="floatingInput">Name</label>
                            </div>
                            @error('name')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating d-flex align-items-center">
                                <ion-icon name="person-add" class="username-icon"></ion-icon>
                                <input type="text" class="form-control inputForm" id="floatingInput" placeholder="username" name="username" value="{{old('username')}}">
                                <label for="floatingInput">Username</label>
                            </div>
                            @error('username')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="form-floating d-flex align-items-center">
                                <ion-icon name="mail-sharp" class="email-icon"></ion-icon>
                                <input type="email" class="form-control inputForm" id="floatingInput" placeholder="name@example.com" name="email" value="{{old('email')}}">
                                <label for="floatingInput">Email address</label>
                            </div>
                            @error('email')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            @if(isset($message))
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating d-flex align-items-center">
                                <ion-icon class="password-icon" name="eye-off-sharp"></ion-icon>
                                <input type="password" class="form-control inputForm" id="password" placeholder="Password" name="password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            @error('password')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="submit-form-btn px-5 m-auto d-block mt-5">Submit</button>
                </form>
                <div class="registe-page-link mt-5">
                    <p class="text-center">Don't have an account? <a href="{{route('login')}}" class="link-register">Login</a></p>
                </div>
        </div>
    </div>

    @push('js')
        <script src="{{asset('js/generalScript.js')}}"></script>
    @endpush
@endsection
