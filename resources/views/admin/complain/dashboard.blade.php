@extends('layouts.app')
{{-- @dump($complains) --}}
@section('content')
<div class="container">
    <div class="columns">
        <div class="column is-3">

            <div class="box">
                <aside class="menu">
                    <p class="menu-label">
                        Show Complains
                    </p>
                    <ul class="menu-list">
                        <li><a>Active</a></li>
                        <li><a>All</a></li>
                        <li><a>Closed</a></li>
                    </ul>
                    <p class="menu-label">
                        Categories
                    </p>
                    <ul class="menu-list">
                        @foreach ($categories as $c)

                        <li>
                            <a href="{{route('complains').'/'.$c->name}}">
                                {{$c->name}}
                            </a>
                            <ul>
                                @foreach ($c->subcategories as $s)
                                <li><a href="{{route('complains').'/'.$c->name.'/'.$s->name}}">
                                        {{$s->name}}
                                    </a></li>
                                @endforeach
                            </ul>
                        </li>


                        @endforeach
                    </ul>
                </aside>

            </div>
        </div>


        <div class="column is-8">
            <div class="box">
                <div class="title is-4"> Complains {{$category !=null ? '/ '.$category : '' }}
                    {{$subcategory !=null ? '/ '.$subcategory : '' }}</div>
                @if (session('status'))
                <div class="notification">
                    {{ session('status') }}
                </div>
                @endif
            </div>


            <div class="box">

                @foreach ($complains as $complain)

                {{-- @dump($complain->id) --}}
                    
                <!-- Main container -->
                <nav class="level level-is-shrinkable">
                    <!-- Left side -->
                    <div class="level-left">
                        <div class="level-item">
                            <p class="level-item">
                                <a class="button {{$complain->status == "active" ? 'is-success' : ''}}">{{$complain->status}}</a>
                            </p>
                        </div>
                        <div class="level-item">
                            <p class="subtitle is-5">
                                since {{$complain->created_at->diffForHumans()}}
                            </p>
                        </div>
                    </div>

                    <!-- Right side -->
                    <div class="level-right">
                        <p class="level-item"><strong>{{$complain->category != null ? $complain->category->name : ''}}</strong></p>
                        <p class="level-item">{{$complain->subcategory != null ? '/ '.$complain->subcategory->name : ''}}</p>
      
                    </div>
                </nav>
                <div class="content">
                    {{$complain->body}}
                </div>
                <hr>
                @endforeach


            </div>

        </div>

    </div>
</div>
@endsection