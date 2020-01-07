@extends('layouts.app')

{{-- @dump($errors) --}}
@section('content')
<div class="container">
    <div class="columns">
        <div class="column" is-hidden-mobile>
            @include('admin.external_links')
        </div>
        <div class="column is-6 ">
            <div class="box">
                <p class="title">{{ __('Add new or Update external link') }}</p>
                <hr><br>

                <form method="POST" action="{{ route('create-links') }}">
                    @csrf

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label for="linkName" class="label">{{ __('Name') }}</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control has-icons-left">
                                    <input name="name" id="linkName" type="linkName" 
                                        class="input{{ $errors->has('linkName') ? ' is-danger' : '' }}" 
                                        value="{{ old('name') }}" required autofocus>
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-external-link-alt"></i>
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
                            <label for="linkUrl" class="label">{{ __('Url') }}</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control has-icons-left">
                                    <input name="url" id="linkUrl" type="linkUrl" 
                                        class="input{{ $errors->has('linkUrl') ? ' is-danger' : '' }}" 
                                        placeholder="Add http:// or https:// to urls" required>

                                    <span class="icon is-small is-left">
                                        <i class="fas fa-link"></i>
                                    </span>
                                    @if ($errors->has('url'))
                                        <p class="help is-danger">
                                            {{ $errors->first('url') }}
                                        </p>
                                    @endif
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
                                        {{ __('Submit') }}
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection