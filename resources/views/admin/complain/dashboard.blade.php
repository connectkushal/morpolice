@extends('layouts.app')
{{-- @dump($categories) --}}
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
                      <a>
                          {{$c->name}}
                        </a> 
                    <ul>
                      @foreach ($c->subcategories as $s)
                        <li><a>
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
                <div class="title">Complains</div>
                    <hr>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

            </div>
        </div>
    </div>
</div>
@endsection
