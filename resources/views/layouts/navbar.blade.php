<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item  is-hoverable" href="{{ url('/') }}">
            Mor Police Admin
        </a>

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
            data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            @auth

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    Complains
                </a>

                <div class="navbar-dropdown">
                    <a class="navbar-item" href="{{ route('complains') }}">
                        Dashboard
                    </a>
                    <a class="navbar-item">
                        Active Complains
                    </a>

                    <hr class="navbar-divider">
                    <a class="navbar-item" href={{route('create-category-form')}}>
                        Edit Categories / Subcategories
                    </a>
                </div>
            </div>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    Modify
                </a>

                <div class="navbar-dropdown">
                    <a class="navbar-item" href="{{route('cgp-form')}}">
                        About CG Police section
                    </a>
                    <a class="navbar-item" href="{{route('faqs-form')}}">
                        Update Faqs
                    </a>
                    <a class="navbar-item" href="{{route('links-form')}}">
                        Edit External Links
                    </a>
                    <a class="navbar-item" href="{{route('social-form')}}">
                        Edit Social Links
                    </a>
                    <hr class="navbar-divider">
                    <a class="navbar-item">
                    </a>
                </div>
            </div>
            <a class="navbar-item">
                Activity
            </a>

            @endauth
        </div>

        <div class="navbar-end">
            <!-- Authentication Links -->
            @auth
            <div class="navbar-item has-dropdown is-hoverable">
                <a id="navbarDropdown" class="navbar-link" href="/profile/{{ Auth::user()->name }}"
                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="navbar-dropdown is-right">
                    <a class="navbar-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
            @endauth
        </div>
    </div>
</nav>


<script>
    document.addEventListener('DOMContentLoaded', function () {

        // Get all "navbar-burger" elements
        var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

        // Check if there are any navbar burgers
        if ($navbarBurgers.length > 0) {

            // Add a click event on each of them
            $navbarBurgers.forEach(function ($el) {
                $el.addEventListener('click', function () {

                    // Get the target from the "data-target" attribute
                    var target = $el.dataset.target;
                    var $target = document.getElementById(target);

                    // Toggle the class on both the "navbar-burger" and the "navbar-menu"
                    $el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');

                });
            });
        }

    });
</script>