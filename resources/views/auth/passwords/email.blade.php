@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns">
        <div class="column is-8 is-offset-2">
            <div class="box">
                <p class="title">{{ __('Reset Password') }}</p>
                <hr><br>

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label for="email" class="label">{{ __('E-Mail Address') }}</label>
                        </div>

                        <div class="field-body">
                            <div class="field">
                                <div class="control has-icons-left">
                                    <input id="email" type="email" class="input{{ $errors->has('email') ? ' is-danger' : '' }}" name="email" value="{{ old('email') }}" required>
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                </div>
                                @if ($errors->has('email'))
                                    <p class="help is-danger">
                                        {{ $errors->first('email') }}
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="field is-horizontal">
                    <div class="field-label">
                        <!-- Left empty for spacing -->
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <button class="button is-link">
                                {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </form>        
            </div>
            <br>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
