@extends('layouts.administration-area')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{ __('Dashboard') }}</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="row">

                    <!-- message-panel -->
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{ __('26') }}</div>
                                        <div>{{ __('Neue Nachrichten!') }}</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">{{ __('Details ansehen') }}</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- task-panel -->
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{ __('12') }}</div>
                                        <div>{{ __('Neue Aufgaben!') }}</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">{{ __('Details ansehen') }}</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- warning-panel -->
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-exclamation-circle fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{ __('3') }}</div>
                                        <div>{{ __('Warnungen!') }}</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">{{ __('Details anzeigen') }}</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- alert-panel -->
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-warning fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{ __('0') }}</div>
                                        <div>{{ __('Fehler!') }}</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">{{ __('Details anzeigen') }}</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- alarm-timeline -->
        <div class="row">
            <div class="col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{ __('Alarm Timeline') }}</h3>
                    </div>
                    <div class="panel-body">
                        <ul class="timeline">
                            <li>
                                <div class="timeline-badge success"><i class="fa fa-check"></i>
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">{{ __('Malware erfolgreich entfernt') }}</h4>
                                        <p>
                                            <small class="text-muted"><i class="fa fa-clock-o"></i>{{ __(' vor 11 Minuten') }}
                                            </small>
                                        </p>
                                    </div>
                                    <div class="timeline-body">
                                        <p>{{ __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero
                                                laboriosam dolor perspiciatis omnis exercitationem. Beatae, officia
                                                pariatur? Est cum veniam excepturi. Maiores praesentium, porro voluptas
                                                suscipit facere rem dicta, debitis.') }}
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="timeline-inverted">
                                <div class="timeline-badge danger"><i class="fa fa-shield"></i>
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">{{ __('Malware entdeckt!') }}</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p>{{ __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolorem
                                                quibusdam, tenetur commodi provident cumque magni voluptatem libero,
                                                quis rerum. Fugiat esse debitis optio, tempore. Animi officiis alias,
                                                officia repellendus.') }}
                                        </p>
                                        <p>{{ __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium
                                                maiores odit qui est tempora eos, nostrum provident explicabo
                                                dignissimos debitis vel! Adipisci eius voluptates, ad aut recusandae
                                                minus eaque facere.') }}
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="timeline-badge success"><i class="fa fa-upload"></i>
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">{{ __('Server neu gestartet') }}</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p>{{ __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus
                                                numquam facilis enim eaque, tenetur nam id qui vel velit similique nihil
                                                iure molestias aliquam, voluptatem totam quaerat, magni commodi
                                                quisquam.') }}
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="timeline-inverted">
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">{{ __('Lorem ipsum dolor') }}</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p>{{ __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates est
                                                quaerat asperiores sapiente, eligendi, nihil. Itaque quos, alias
                                                sapiente rerum quas odit! Aperiam officiis quidem delectus libero, omnis
                                                ut debitis!') }}
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="timeline-badge danger"><i class="fa fa-bolt"></i>
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">{{ __('Server abgestürzt!') }}</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p>{{ __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis minus
                                                modi quam ipsum alias at est molestiae excepturi delectus nesciunt,
                                                quibusdam debitis amet, beatae consequuntur impedit nulla qui! Laborum,
                                                atque.') }}
                                        </p>
                                        <hr>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                                    data-toggle="dropdown">
                                                <i class="fa fa-gear"></i> <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">{{ __('Action') }}</a>
                                                </li>
                                                <li><a href="#">{{ __('Another action') }}</a>
                                                </li>
                                                <li><a href="#">{{ __('Something else here') }}</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li><a href="#">{{ __('Separated link') }}</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">{{ __('Lorem ipsum dolor') }}</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p>{{ __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi fuga odio
                                                quibusdam. Iure expedita, incidunt unde quis nam! Quod, quisquam.
                                                Officia quam qui adipisci quas consequuntur nostrum sequi. Consequuntur,
                                                commodi.') }}
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="timeline-inverted">
                                <div class="timeline-badge warning"><i class="fa fa-warning"></i>
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">{{ __('Server antwortet nicht') }}</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p>{{ __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt
                                                obcaecati, quaerat tempore officia voluptas debitis consectetur culpa
                                                amet, accusamus dolorum fugiat, animi dicta aperiam, enim incidunt
                                                quisquam maxime neque eaque.') }}
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- right-side -->
            <div class="col-lg-4">

                <!-- notification-panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{ __('Benachrichtigungen') }}</h3>
                    </div>
                    <div class="panel-body">
                        <div class="list-group">
                            <a href="#" class="list-group-item">
                                <i class="fa fa-comment fa-fw"></i>{{ __(' Neue Nachrichten') }}
                                <span class="pull-right text-muted small"><em>{{ __('vor 4 Minuten') }}</em></span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-envelope fa-fw"></i>{{ __(' Nachricht gesendet') }}
                                <span class="pull-right text-muted small"><em>{{ __('vor 27 Minuten') }}</em></span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-tasks fa-fw"></i>{{ __(' Neue Aufgabe') }}
                                <span class="pull-right text-muted small"><em>{{ __('vor 43 Minuten') }}</em></span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-upload fa-fw"></i>{{ __(' Server neu gestartet') }}
                                <span class="pull-right text-muted small"><em>{{ __('11:32') }}</em></span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-bolt fa-fw"></i>{{ __(' Server abgestürzt!') }}
                                <span class="pull-right text-muted small"><em>{{ __('11:13') }}</em></span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-warning fa-fw"></i>{{ __(' Server antwortet nicht') }}
                                <span class="pull-right text-muted small"><em>{{ __('Gestern') }}</em></span>
                            </a>
                        </div>
                        <a href="#" class="btn btn-default btn-block">{{ __('Alle Alarme anzeigen') }}</a>
                    </div>
                </div>

                <!-- chat-panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{ __('Chat') }}</h3>
                    </div>
                    <div class="panel-body">
                        <ul class="chat">
                            <li class="left clearfix">
                                <span class="chat-img pull-left"><img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle"/></span>
                                <div class="chat-body clearfix">
                                    <div class="header">
                                        <strong class="primary-font">{{ __('Jack Sparrow') }}</strong>
                                        <small class="pull-right text-muted">
                                            <i class="fa fa-clock-o fa-fw"></i>{{ __(' vor 12 Minuten') }}
                                        </small>
                                    </div>
                                    <p>{{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
                                            ornare dolor, quis ullamcorper ligula sodales.') }}
                                    </p>
                                </div>
                            </li>

                            <li class="right clearfix">
                                    <span class="chat-img pull-right">
                                        <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar"
                                             class="img-circle"/>
                                    </span>
                                <div class="chat-body clearfix">
                                    <div class="header">
                                        <small class=" text-muted">
                                            <i class="fa fa-clock-o fa-fw"></i>{{ __(' vor 13 Minuten') }}
                                        </small>
                                        <strong class="pull-right primary-font">{{ __('Gustav Gans') }}</strong>
                                    </div>
                                    <p>{{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
                                            ornare dolor, quis ullamcorper ligula sodales.') }}
                                    </p>
                                </div>
                            </li>

                            <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar"
                                             class="img-circle"/>
                                    </span>
                                <div class="chat-body clearfix">
                                    <div class="header">
                                        <strong class="primary-font">{{ __('Jack Sparrow') }}</strong>
                                        <small class="pull-right text-muted">
                                            <i class="fa fa-clock-o fa-fw"></i>{{ __(' vor 14 Minuten') }}
                                        </small>
                                    </div>
                                    <p>{{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
                                            ornare dolor, quis ullamcorper ligula sodales.') }}
                                    </p>
                                </div>
                            </li>

                            <li class="right clearfix">
                                    <span class="chat-img pull-right">
                                        <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar"
                                             class="img-circle"/>
                                    </span>
                                <div class="chat-body clearfix">
                                    <div class="header">
                                        <small class=" text-muted">
                                            <i class="fa fa-clock-o fa-fw"></i>{{ __(' vor 15 Minuten') }}
                                        </small>
                                        <strong class="pull-right primary-font">{{ __('Gustav Gans') }}</strong>
                                    </div>
                                    <p>{{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
                                            ornare dolor, quis ullamcorper ligula sodales.') }}
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="panel-footer">
                        <div class="input-group">
                            <input id="btn-input" type="text" class="form-control input-sm"
                                   placeholder="Geben Sie hier Ihre Nachricht ein..."/>
                            <span class="input-group-btn">
                                    <button class="btn btn-warning btn-sm" id="btn-chat">
                                        {{ __('Senden') }}
                                    </button>
                                </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="http://demo.startlaravel.com/sb-admin-laravel/assets/scripts/frontend.js"
            type="text/javascript"></script>
@endsection