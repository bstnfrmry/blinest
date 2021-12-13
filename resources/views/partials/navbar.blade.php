<nav id="mainNav" class="navbar navbar-expand-lg bg-secondary text-uppercase">
    <div class="container-fluid">

        <img width="50" height="50" class="mr-2" loading="lazy" src="/images/xmas.png" title="Joyeux Noël!">

        <a class="navbar-brand" href="{{ url('/') }}">
            <img loading="lazy" src="/img/logo_svg.svg" alt="{{ config('app.name', 'Blinest') }}">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav d-flex align-items-center ml-auto">

                <!-- Authentication Links -->
                <li class="nav-item mr-4">
                    <search-games></search-games>
                </li>

                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link" title="Menu" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bars"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item disabled" href="#">{{ Auth::user()->name }}</a>
                            <div class="dropdown-divider"></div>

                            @if(Auth::user()->is('admin'))
                                <a href="{{ route('admin.dashboard.index') }}" class="dropdown-item">Dashboard</a>
                                <a href="/admin/horizon" class="dropdown-item">Horizon</a>
                                <a href="{{ route('admin.users.index') }}" class="dropdown-item">Utilisateurs</a>
                                <a href="{{ route('admin.tracks.index') }}" class="dropdown-item">Tracks</a>
                                <a href="{{ route('admin.games.index') }}" class="dropdown-item">Parties</a>
                                <div class="dropdown-divider"></div>
                            @endif

                            <a class="dropdown-item" href="{{ route('releases') }}">Actualités</a>
                            <a class="dropdown-item" href="{{ route('games.me') }}">Mes parties</a>
                            <a class="dropdown-item" href="{{ route('profile') }}">Mon compte</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>

<!--
                    <li class="nav-item">
                        <a href="{{ route('lab.index') }}" class="nav-link text-warning" title="Le lab"><i class="fas fa-flask"></i></a>
                    </li>
-->
                    <li class="nav-item">
                        <a href="https://github.com/mchev/blinest" rel="nofollow noopener" target="_blank" class="nav-link text-white" title="Github"><i class="fab fa-github"></i></a>
                    </li>

                    <li class="nav-item" title="Ce site fait avec ♥ vous est proposé gratuitement. Si vous souhaitez le soutenir (serveur, maintenance, développement) vous pouvez faire un don.">
                        <a href="/faire-un-don" class="nav-link" title="Soutenir blinest"><i class="fas fa-donate"></i></a>
                    </li>

                @endguest

            </ul>
        </div>
    </div>
</nav>