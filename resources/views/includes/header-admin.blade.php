<nav class="navbar navbar-expand-lg navbar-dark" id="moki-navbar">

    <!-- Left Side Of Navbar -->
    <a class="navbar-brand" href="#">
        <img src="{{ URL::to('/image/Navbar_Logo.png') }}" alt="MoKi" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>

                <!-- dropdown-messages -->
                <ul class="dropdown-menu dropdown-messages">
                    <li>
                        <a href="#">
                            <div>
                                <strong>{{ __('Arnold Schwarzenegger') }}</strong>
                                <span class="pull-right text-muted">
                                    <em>{{ __('Gestern') }}</em>
                                </span>
                            </div>
                            <div>{{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...') }}</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <strong>{{ __('Elvis Presley') }}</strong>
                                <span class="pull-right text-muted">
                                    <em>{{ __('Gestern') }}</em>
                                </span>
                            </div>
                            <div>{{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...') }}</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <strong>{{ __('Nemo') }}</strong>
                                <span class="pull-right text-muted">
                                        <em>{{ __('Gestern') }}</em>
                                    </span>
                            </div>
                            <div>{{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...') }}</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>{{ __('Alle Nachrichten') }}  </strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- /.dropdown-messages -->

            <!-- dropdown-tasks -->
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-tasks">
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>{{ __('Aufgabe 1') }}</strong>
                                    <span class="pull-right text-muted">{{ __('40% abgeschlossen') }}</span>
                                </p>

                                <div>
                                    @include('widgets.progress', array('animated'=> true, 'class'=>'success', 'value'=>'40'))
                                    <span class="sr-only">{{ __('40% Complete (success)') }}</span>
                                </div>

                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>{{ __('Aufgabe 2') }}</strong>
                                    <span class="pull-right text-muted">{{ __('20% abgeschlossen') }}</span>
                                </p>

                                <div>
                                    @include('widgets.progress', array('animated'=> true, 'class'=>'info', 'value'=>'20'))
                                    <span class="sr-only">{{ __('20% Complete') }}</span>
                                </div>

                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>{{ __('Aufgabe 3') }}</strong>
                                    <span class="pull-right text-muted">{{ __('60% abgeschlossen') }}</span>
                                </p>

                                <div>
                                    @include('widgets.progress', array('animated'=> true, 'class'=>'warning', 'value'=>'60'))
                                    <span class="sr-only">{{ __('60% Complete (warning)') }}</span>
                                </div>

                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>{{ __('Aufgabe 4') }}</strong>
                                    <span class="pull-right text-muted">{{ __('80% abgeschlossen') }}</span>
                                </p>

                                <div>
                                    @include('widgets.progress', array('animated'=> true,'class'=>'danger', 'value'=>'80'))
                                    <span class="sr-only">{{ __('80% Complete (danger)') }}</span>
                                </div>

                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>{{ __('Alle Aufgaben ansehen') }}</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- /.dropdown-tasks -->

            <!-- dropdown-alerts -->
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i>{{ __(' Neue Nachricht') }}
                                <span class="pull-right text-muted small">{{ __('vor 4 Minuten') }}</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-envelope fa-fw"></i>{{ __(' Nachricht gesendet') }}
                                <span class="pull-right text-muted small">{{ __('vor 27 Minuten') }}</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-tasks fa-fw"></i>{{ __(' Neue Aufgabe') }}
                                <span class="pull-right text-muted small">{{ __('vor 43 Minuten') }}</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-upload fa-fw"></i>{{ __(' Server neu gestartet') }}
                                <span class="pull-right text-muted small">{{ __('11:32') }}</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>{{ __('Alle Alarme anzeigen') }}</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- /.dropdown-alerts -->

            <!-- dropdown-user -->
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
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
                            <i class="fa fa-sign-out fa-fw"></i>{{ __(' Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
            <!-- /.dropdown-user -->
        </ul>
    </div>
</nav>
