@extends('layouts.sidebar')

@section('content')
    <div id="content">

        <!-- carousel-wrapper -->
        <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">

            <!-- indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-2" data-slide-to="1"></li>
                <li data-target="#carousel-example-2" data-slide-to="2"></li>
            </ol>
            <!-- /.indicators -->

            <!-- slides -->
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="view">
                        <img class="d-block w-100" src="{{ URL::to('/image/Alzheimer.jpg') }}" alt="First slide"/>
                        <div class="mask rgba-black-light"></div>
                    </div>
                    <div class="hero">
                        <h1>{{ __('Demenz') }}</h1>
                        <h3>{{ __('Bluttest entdeckt Alzheimer Jahre vor den ersten Symptomen.') }}</h3>
                    </div>
                    <div class="carousel-caption">
                        <p>{{ __('Deutschlandweit leiden knapp zwei Millionen Menschen an Demenz.
                                    Nun haben Forscher einen Test entwickelt, der die Krankheit schon
                                    bis zu 16 Jahre im Voraus aufspüren kann. ') }}
                            <a href="http://www.spiegel.de/gesundheit/diagnose/demenz-bluttest-entdeckt-alzheimer-jahre-vor-den-ersten-symptomen-a-1249361-amp.html">{{ __('Lesen...') }}</a>
                        </p>
                    </div>
                </div>
                <div class="carousel-item">

                    <!-- mask-color -->
                    <div class="view">
                        <img class="d-block w-100" src="{{ URL::to('/image/Impfung.jpg') }}" alt="Second slide">
                        <div class="mask rgba-black-strong"></div>
                    </div>
                    <div class="hero">
                        <h1>{{ __('Influenza') }}</h1>
                        <h3>{{ __('Jetzt Impfen! Schützen Sie sich und andere vor der saisonalen Influenza!') }}</h3>
                    </div>
                    <div class="carousel-caption">
                        <p>{{ __('Winterzeit ist Grippezeit. Den besten Schutz vor einer Erkrankung bietet die Grippeschutzimpfung. Raum: G10.2.05') }}</p>
                    </div>
                </div>
                <div class="carousel-item">

                    <!-- mask-color -->
                    <div class="view">
                        <img class="d-block w-100" src="{{ URL::to('/image/Wartung.jpg') }}" alt="Third slide">
                        <div class="mask rgba-black-slight"></div>
                    </div>
                    <div class="hero">
                        <h1>{{ __('Wartung') }}</h1>
                        <h3>{{ __('Wartung der Server') }}</h3>
                    </div>
                    <div class="carousel-caption">
                        <p>{{ __('Am 08.02.2019 werden ab 11:15 Uhr die Server gewartet.
                                    Es kann zu einzelnen Problemen kommen.
                                    Bis 12:15 Uhr sollten die Wartungsarbeiten abgeschlossen sein.') }}</p>
                    </div>
                </div>
            </div>
            <!-- /.slides -->

            <!-- controls -->
            <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--/.controls-->
        </div>
        <!--/.carousel-wrapper-->
    </div>
@endsection
