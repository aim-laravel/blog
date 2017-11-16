@extends('layouts.app') @section('content')

<div class="container">
    <div class="columns">
        <div class="column is-one-third is-offset-one-third m-t-50">
            <div class="card">
                <div class="card-content">
                    <h1 class="title">Login</h1>

                    <form action="{{ route('login') }}" method="post">
                        {{ csrf_field() }}
                        <div class="field">
                            <label for="email">Email Address</label>
                            <p class="control">
                                <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" type="text" name="email" id="email" value="{{ old('email') }}" required>
                            </p>
                            @if($errors->has('email'))
                            <p class="help is-danger">{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                        <div class="field">
                            <label for="email">Password</label>
                            <p class="control">
                                <input class="input {{ $errors->has('password') ? 'is-danger' : '' }}" type="password" name="password" id="password" required>
                            </p>
                            @if($errors->has('password'))
                            <p class="help is-danger">{{ $errors->first('password') }}</p>
                            @endif
                        </div>
                        <b-checkbox name="remember">Remember Me</b-checkbox>
                        <button class="button is-success is-outlined is-fullwidth m-t-30">
                            Log In
                        </button>
                    </form>
                </div>
            </div>
            <!-- Card End -->

            <h5 class="has-text-centered m-t-20">
                <a href="{{ route('password.request') }}" class="is-muted">
                    Forgot Your Password?
                </a>
            </h5>
        </div>
    </div>
</div>
@endsection @section('scripts')
<script>
    const app = new Vue({
        el: '#app'
    });
</script>
@endsection
