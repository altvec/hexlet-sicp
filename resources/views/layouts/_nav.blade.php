<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Hexlet SICP') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('chapters.index') }}">
                        <i class="fas fa-book"></i>

                        {{ __('layout.nav.chapters') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" target="_blank"
                        href="https://guides.hexlet.io/how-to-learn-sicp/">
                        <i class="far fa-hand-point-right"></i>
                        {{ __('layout.nav.sicp_read') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('ratings.index') }}">
                        <i class="fas fa-list-ol"></i>
                        {{ __('layout.nav.rating') }}
                    </a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">
                            <i class="fas fa-sign-in-alt"></i>
                            {{ __('layout.nav.login') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">
                        <i class="fas fa-user-plus"></i>
                        {{ __('layout.nav.register') }}
                    </a>
                </li>

                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('my') }}">
                        <i class="fas fa-tasks"></i>
                        {{ __('layout.nav.my_progress') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" data-method="post" rel="nofollow">
                        <i class="fas fa-sign-out-alt"></i>
                        {{ __('layout.nav.logout') }}
                    </a>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
