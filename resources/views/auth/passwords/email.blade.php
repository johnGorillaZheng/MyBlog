@extends('layouts.app')

@section('content')

<div class="container">
    <div class="columns">
        <div class="column is-half is-offset-one-quarter m-t-50">
            <div class="card">
                <div class="card-content">
                    <h1 class="title">Forgot Password?</h1>
                    <form action="{{ route('password.email') }}" method="POST" role="form">
                        {{ csrf_field() }}

                        <div class="field">
                            <label for="email" class="label">Email Address</label>
                            <p class="control">
                                <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" type="text" name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}" required>
                            </p>
                            @if ($errors->has('email'))
                                <p class="help is-danger">{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                        <button class="button is-primary is-outlined is-fullwidth m-t-30">Get Reset Link</button>
                    </form>  
                </div>
                <h5 class="has-text-centered m-t-20"><a href="{{ route('login') }}">Back to Login</a></h5>
            </div>
        </div>
    </div>
</div>
@endsection
