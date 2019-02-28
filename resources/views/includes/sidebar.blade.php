<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <ul>
            <li>
                <a href="{{ url('/notaufnahme') }}">
                    <button class="btn btn-success" id="sidebarButton">
                        <img src="{{ URL::to('/image/Notaufnahme.png') }}" alt="Notaufnahme"/>
                    </button>
                </a>
            </li>
            <li>
                <a href="{{ url('/radiologie') }}">
                    <button class="btn btn-success" id="sidebarButton">
                        <img src="{{ URL::to('/image/Radiologie.png') }}" alt="Radiologie"/>
                    </button>
                </a>
            </li>
            <li>
                <a href="{{ url('/neurologie') }}">
                    <button class="btn btn-success" id="sidebarButton">
                        <img src="{{ URL::to('/image/Neurologie.png') }}" alt="Neurologie"/>
                    </button>
                </a>
            </li>
            <li>
                <a href="{{ url('/kardiologie') }}">
                    <button class="btn btn-success" id="sidebarButton">
                        <img src="{{ URL::to('/image/Kardiologie.png') }}" alt="Kardiologie"/>
                    </button>
                </a>
            </li>
            <li>
                <a href="{{ url('/gastroenterologie') }}">
                    <button class="btn btn-success" id="sidebarButton">
                        <img src="{{ URL::to('/image/Gastroenterologie.png') }}" alt="Gastroenterologie"/>
                    </button>
                </a>
            </li>
            <li>
                <a href="{{ url('/pneumologie') }}">
                    <button class="btn btn-success" id="sidebarButton">
                        <img src="{{ URL::to('/image/Pneumologie.png') }}" alt="Pneumologie"/>
                    </button>
                </a>
            </li>
            @if(Auth::user()->role_id === 1)
                <li>
                    <a href="{{ url ('/dashboard') }}">
                        <button class="btn btn-success" id="sidebarButton">
                            <i class="fa fa-dashboard fa-3x"></i>
                        </button>
                    </a>
                </li>
            @endif
        </ul>
    </nav>
</div>
