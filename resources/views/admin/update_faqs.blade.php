@extends('layouts.app')

{{-- @dump($errors) --}}
@section('content')
<div class="container">
    <div class="columns">
        <div class="column is-hidden-mobile">
            @include('admin.faqs')
        </div>
        <div class="column is-6 ">
            <div class="box">
                <p class="title">{{ __('Add new question') }}</p>
                <hr><br>

                <form method="POST" action="{{ route('update-faqs') }}">
                    @csrf

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label for="question" class="label">{{ __('Question') }}</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control has-icons-left">
                                    <input name="question" id="question" type="question" 
                                        class="input{{ $errors->has('question') ? ' is-danger' : '' }}" 
                                        value="{{ old('question') }}" required autofocus>
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-question-circle"></i>
                                    </span>
                                    @if ($errors->has('question'))
                                        <p class="help is-danger">
                                            {{ $errors->first('question') }}
                                        </p>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label for="faq-ans" class="label">{{ __('Answer') }}</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control">
                                    <textarea name="answer" id="faq-ans" type="faq-ans" 
                                        class="textarea {{ $errors->has('answer') ? ' is-danger' : '' }}" 
                                        required></textarea>
                                
                                    @if ($errors->has('answer'))
                                        <p class="help is-danger">
                                            {{ $errors->first('answer') }}
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

        <div class="column is-hidden-tablet">
            @include('admin.faqs')
        </div>
    </div>
</div>
@endsection