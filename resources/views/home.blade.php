@extends('layouts.app')

@section('content')
<section class="section">
<div class="container">
    <div class="columns">
        <div class="column is-8 is-offset-2">
            <div class="box">
                <div class="title">Dashboard</div>
                    <hr>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
            </div>
        </div>
    </div>
</div>
</section>
@endsection
