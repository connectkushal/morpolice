@extends('layouts.app')

{{-- @dump($errors) --}}
{{-- @dump(request('isSelected')) --}}

@section('content')
<div class="container">

    <div class="columns">

        <div class="column is-hidden-mobile">
            @include('admin.complain.categories')
        </div>

        <div class="column is-6">
            <div class="box">
                <p class="title">{{ __('Add new category') }}</p>
                <hr>

                <form method="POST" action="{{ route('create-category') }}">
                    @csrf

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label for="category" class="label">{{ __('Name') }}</label>
                        </div>
                        <div class="field-body">
                            <div class="field ">
                                <p class="control has-icons-left">
                                    <input id="category" type="category" class="input{{ $errors->has('category') ? ' is-danger' : '' }}" 
                                      name="category" value="{{ old('category') }}" required autofocus>

                                    <span class="icon is-small is-left">
                                        <i class="fas fa-folder"></i>
                                    </span>
                                    @if ($errors->has('category'))
                                        <p class="help is-danger">
                                            {{ $errors->first('category') }}
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
                            <div class="field ">
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

            <div class="box">
                <p class="title">{{ __('Add new subcategory') }}</p>
                <hr>

            <form method="POST" action="{{ route('create-subcategory') }}">
                    @csrf

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">Category</label>
                        </div>
                        <div class="field-body"> 
                            <div class="field">
                            <div class="control">
                                <div class="select" required>
                                    <select name="category_id">
                                        <option value=0>Select category</option>
                                        @foreach ($categories as $item)
                                        <option value={{$item->id}} {{request('isSelected') == $item->id ? 'selected': '' }}> 
                                            {{ $item->name }}
                                        </option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            </div>
                        
                        </div> 
                    </div>
                        

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label for="category" class="label">{{ __('Name') }}</label>
                        </div>
                        <div class="field-body">
                            <div class="field ">
                                <p class="control  has-icons-left">
                                    <input id="subcategory" type="subcategory" class="input{{ $errors->has('subcategory') ? ' is-danger' : '' }}" 
                                      name="subcategory" value="{{ old('subcategory') }}" required autofocus>
        
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-sitemap"></i>
                                    </span>
                                    @if ($errors->has('subcategory'))
                                        <p class="help is-danger">
                                            {{ $errors->first('subcategory') }}
                                        </p>
                                    @endif

                                    @if ($errors->has('category_id'))
                                    <p class="help is-danger">
                                        {{ $errors->first('category_id') }}
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
                            <div class="field ">
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
            @include('admin.complain.categories')
        </div>
       

    </div>
</div>
@endsection
