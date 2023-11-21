@extends('layouts.auth-master')

@section('content')
    <form method="post" action="{{ route('login.perform') }}"> <input type="hidden" name="_token"
            value="{{ csrf_token() }}" />
        <h2 style="text-align: center; padding-bottom:2rem;">Login</h2>

        @include('layouts.partials.messages')

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username"
                required="required" autofocus>
            <label for="floatingName">Email or Username</label>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password"
                required="required">
            <label for="floatingPassword">Password</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        <div class="form-text">
            <p style="margin-bottom: 5px;">Don’t have an account yet? <a href="/register" class="text-primary">Sign up
                    for
                    free.</a></p>
            <p>Didn’t receive your confirmation email? <a href="#" class="text-primary">Resend it</a></p>
        </div>

        @include('auth.partials.copy')
    </form>
@endsection