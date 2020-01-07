@extends('layouts.app')

{{-- @dump($errors) --}}
@section('content')
<div class="container">
    <div class="columns">
        <div class="column" is-hidden-mobile>
            @include('admin.social_links')
        </div>
        <div class="column is-6 ">
            <div class="box">
                <p class="title">{{ __('Update profile links') }}</p>
                <hr><br>

                <form method="POST" action="{{ route('create-social') }}">
                    @csrf
                    <input name="name" value='twitter' type="hidden" placeholder="Text input">
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label for="linkUrl" class="label">{{ __('Website') }}</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control has-icons-left">
                                    <h6 class="input">Twitter</h6>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label for="linkUrl" class="label">{{ __('Profile url') }}</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control has-icons-left">
                                    <input name="url" id="linkUrl" type="linkUrl"
                                        class="input{{ $errors->has('twitter') ? ' is-danger' : '' }}"
                                        placeholder="Add https:// to urls" required>

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
                <hr>

                <form method="POST" action="{{ route('create-social') }}">
                    @csrf
                    <input name="name" value='facebook' type="hidden" placeholder="Text input">

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label for="linkUrl" class="label">{{ __('Website') }}</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control has-icons-left">
                                    <h6 class="input">Facebook</h6>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label for="linkUrl" class="label">{{ __('Profile url') }}</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control has-icons-left">
                                    <input name="url" id="linkUrl" type="linkUrl"
                                        class="input{{ $errors->has('twitter') ? ' is-danger' : '' }}"
                                        placeholder="Add https:// to urls" required>

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


                <hr><br>
                <p class="title">{{ __('Add new or Update link') }}</p>

                <form method="POST" action="{{ route('create-social') }}">
                    @csrf

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label for="linkName" class="label">{{ __('Site Name') }}</label>
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
                                    @if ($errors->has('linkName'))
                                    <p class="help is-danger">
                                        {{ $errors->first('linkName') }}
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
                                        class="input{{ $errors->has('url') ? ' is-danger' : '' }}"
                                        placeholder="Add https:// to urls" required>

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