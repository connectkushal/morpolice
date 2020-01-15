@extends('layouts.app')

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
                  <li><a>Team Settings</a></li>
                  <li>
                    <a class="is-active">Manage Your Team</a>
                    <ul>
                      <li><a>Members</a></li>
                      <li><a>Plugins</a></li>
                      <li><a>Add a member</a></li>
                    </ul>
                  </li>
                  <li><a>Invitations</a></li>
                  <li><a>Cloud Storage Environment Settings</a></li>
                  <li><a>Authentication</a></li>
                </ul>
                <p class="menu-label">
                  Transactions
                </p>
                <ul class="menu-list">
                  <li><a>Payments</a></li>
                  <li><a>Transfers</a></li>
                  <li><a>Balance</a></li>
                </ul>
              </aside>
        
            </div>
        </div>

        <div class="column is-8">
            <div class="box">
                <div class="title">asdfa</div>
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
@endsection
