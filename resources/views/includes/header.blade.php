<nav class="navbar navbar-expand-lg navbar-dark" id="moki-navbar">

    <!-- Left Side Of Navbar -->
    <a class="navbar-brand" href="#">
        <img src="{{ URL::to('/image/Navbar_Logo.png') }}" alt="MoKi" />
    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            @if (Route::has('login'))
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/home') }}">{{ __('Home') }} </a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endauth
                    </ul>
                </div>
            @endif
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">

            <!-- Authentication Links -->
        @guest

        @else
            <!-- new-patien-button -->
                <ul class="navbar-nav">
                    <a class="navbar-brand" href={{route('patients.create')}} >
                        <figure><img src="{{ URL::to('/image//NeuerPatient.png') }}" alt="Neuer Patient" id="patientButton"/></figure>
                        <span>{{ __('Neuen Patienten anlegen!') }}</span>
                    </a>

                    <!-- user-dropdown -->
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i>{{ __(' Benutzerprofil') }}</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i>{{ __(' Einstellungen') }}</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out fa-fw"></i>{{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>

                    <!-- patient-search -->
                    <div class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Patientenname" aria-label="Search">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">{{ __('Suchen') }}</button>
                    </div>
                </ul>
            @endguest
        </ul>
    </div>
</nav>
