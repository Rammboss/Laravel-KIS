<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
        </div>
        <ul class="list-unstyled components">
            <li>
                <h3><a class="nav-link" href="{{ url('/home') }}"><i class="fa fa-home fa-fw"></i>{{ __(' Home') }}</a></h3>
            </li>
            <li {{ (Request::is('/dashboard') ? 'class="active"' : '') }}>
                <a href="{{ url ('dashboard') }}"><i class="fa fa-dashboard fa-fw"></i>{{ __(' Dashboard') }}</a>
            </li>
            <li {{ (Request::is('/dashboard/benutzerverwaltung') ? 'class="active"' : '') }}>
                <a href="{{ url ('dashboard/benutzerverwaltung') }}"><i class="fa fa-user fa-fw"></i>{{ __(' Benutzerverwaltung') }}</a>
            </li>
            <li {{ (Request::is('/dashboard/stationsverwaltung') ? 'class="active"' : '') }}>
                <a href="{{ url ('dashboard/stationsverwaltung') }}"><i class="fa fa-bed fa-fw"></i>{{ __(' Stationsverwaltung') }}</a>
            </li>
            <li {{ (Request::is('/dashboard/formularmanager') ? 'class="active"' : '') }}>
                <a href="{{ url ('dashboard/formularmanager') }}"><i class="fa fa-file-o fa-fw"></i>{{ __(' Formularmanager') }}</a>
            </li>
            <li {{ (Request::is('/dashboard/patientenaufnahme') ? 'class="active"' : '') }}>
                <a href="{{ url ('dashboard/patientenaufnahme') }}"><img class="patient-card-icon" src="{{ URL::to('/image/PatientCardIcon@2x.png') }}" alt="Patientenaufnahme">{{ __(' Patientenaufnahme') }}</a>
            </li>
            <li {{ (Request::is('/dashboard/krankenkassen') ? 'class="active"' : '') }}>
                <a href="{{ url ('dashboard/krankenkassen') }}"><i class="fa fa-credit-card  fa-fw"></i>{{ __(' Krankenkassen') }}</a>
            </li>
            <li {{ (Request::is('/dashboard/news') ? 'class="active"' : '') }}>
                <a href="{{ url ('dashboard/news') }}"><i class="fa fa-camera-retro fa-fw"></i>{{ __(' News') }}</a>
            </li>
        </ul>
    </nav>
</div>
