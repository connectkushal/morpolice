@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns">
        <div class="column is-8 is-offset-2">
            <div class="box">
                <p class="title">{{ __('Register') }}</p>
                <hr><br>
            
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label for="name" class="label">{{ __('Name') }}</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control is-expanded has-icons-left">
                                    <input id="name" type="text" class="input{{ $errors->has('name') ? ' is-danger' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-user"></i>
                                    </span>

                                    @if ($errors->has('name'))
                                        <p class="help is-danger">
                                            {{ $errors->first('name') }}
                                        </p>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label for="name" class="label">{{ 'Username' }}</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control is-expanded has-icons-left">
                                    <input id="name" type="text" class="input{{ $errors->has('username') ? ' is-danger' : '' }}" name="username" value="{{ old('username') }}" required autofocus>
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-user"></i>
                                    </span>

                                    @if ($errors->has('username'))
                                        <p class="help is-danger">
                                            {{ $errors->first('username') }}
                                        </p>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label for="email" class="label">{{ __('E-Mail Address') }}</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                            <p class="control is-expanded has-icons-left">
                            <input id="email" type="email" class="input{{ $errors->has('email') ? ' is-danger' : '' }}" name="email" value="{{ old('email') }}" required>
                            <span class="icon is-small is-left">
                                <i class="fas fa-envelope"></i>
                            </span>

                            @if ($errors->has('email'))
                                <span class="help is-danger">
                                    {{ $errors->first('email') }}
                                </span>
                            @endif
                            </p>
                            </div>
                        </div>
                    </div>

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label for="password" class="label">{{ __('Password') }}</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                            <p class="control is-expanded has-icons-left">
                            <input id="password" type="password" class="input{{ $errors->has('password') ? ' is-danger' : '' }}" name="password" required>
                            <span class="icon is-small is-left">
                                <i class="fas fa-lock"></i>
                            </span>


                            @if ($errors->has('password'))
                                <span class="help is-danger">
                                    {{ $errors->first('password') }}
                                </span>
                            @endif
                            </p>
                            </div>
                        </div>
                    </div>

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label for="password-confirm" class="label">{{ __('Confirm Password') }}</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                            <p class="control is-expanded has-icons-left">
                            <span class="icon is-small is-left">
                                <i class="fas fa-lock"></i>
                            </span>
                            <input id="password-confirm" type="password" class="input" name="password_confirmation" required>
                            </p>
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
                                    {{ __('Register') }}
                                </button>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
