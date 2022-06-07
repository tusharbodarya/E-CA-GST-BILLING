@extends('layouts.app')

@section('content')
    <div class="home-btn d-none d-sm-block">
        <a href="{{ url('/index') }}" class="text-dark"><i class="fas fa-home h2"></i></a>
    </div>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-soft-primary">
                            <div class="row">
                                <div class="col-7">
                                    .
                                    <div class="text-primary p-4">
                                        <h5 class="text-primary">Reset Password</h5>
                                        <p>Re-Password with E'CA GTS Billing Software.</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="{{ asset('assets/images/profile-img.png')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div>
                                <a href="{{ url('/index') }}">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="{{ asset('assets/images/logo.svg')}}" alt="" height="34">
                                            {{-- <img src="{{ asset('assets/images/logo.svg')}}" alt="" class="rounded-circle" height="34"> --}}
                                        </span>
                                    </div>
                                </a>
                            </div>

                            <div class="p-2">
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="email">{{ __('E-Mail Address') }}</label>

                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>


                                    <div class="col-12 text-right">
                                        <button class="btn btn-primary w-md waves-effect waves-light"
                                            type="submit">{{ __('Send Password Reset Link') }}</button>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <p>Remember It ? <a href="{{ route('register') }}" class="font-weight-medium text-primary"> Sign In here</a>
                        </p>
                        <p>© 2020 E'CA GTS Billing Software. Crafted with <i class="mdi mdi-heart text-danger"></i> by Tushar Bodarya</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
