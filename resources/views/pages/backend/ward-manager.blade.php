@extends('layouts.administration-area')

@section('content')
    <div id="page-wrapper">
        <div class="col-lg-12">
            <h1 class="page-header">{{ __('Stationsverwaltung') }}</h1>
            <div class="row">

                <!-- ward-card -->
                <div class="card mt-3 ml-2" style="width: 18rem;" id="patient-card">
                    <div class="card-img-top" id="patient-card-header">
                        <div class="center-block" id="ward-card-circle">
                            <img class="center-block" id="ward-image" src="" alt="PatientQrCode">
                        </div>
                    </div>

                    <div class="card-body">
                        <h2 class="card-title">{{ __('Chirurgie') }}</h2>
                        <div class="text-muted">
                            {{ __('Deaktiviert') }}
                        </div>
                    </div>

                    <div class="card-footer" id="formular-footer">
                        <h5>
                            <div class="row">
                                <a href="#" data-toggle="modal" data-target="#edit" id="patient-link">{{ __('Station bearbeiten') }}</a>
                            </div>
                            <div class="row">
                                <a href="#" data-toggle="modal" data-target="#myModal" id="medical-report-link">{{ __('Aktivieren') }}</a>
                            </div>
                        </h5>
                    </div>
                </div>

                <!-- ward-card -->
                <div class="card mt-3 ml-2" style="width: 18rem;" id="patient-card">
                    <div class="card-img-top" id="patient-card-header">
                        <div class="center-block" id="ward-card-circle">
                            <img class="center-block" id="ward-image" src="{{ URL::to('/image/Gastroenterologie.png') }}" alt="PatientQrCode">
                        </div>
                    </div>

                    <div class="card-body">
                        <h2 class="card-title">{{ __('Gastroenterologie') }}</h2>
                        <div class="text-muted">
                            Aktiv
                        </div>
                    </div>

                    <div class="card-footer" id="formular-footer">
                        <h5>
                            <div class="row">
                                <a href="#" data-toggle="modal" data-target="#edit" id="patient-link">{{ __('Station bearbeiten') }}</a>
                            </div>
                            <div class="row">
                                <a href="#" data-toggle="modal" data-target="#deactivate" id="medical-report-link">{{ __('Deaktivieren') }}</a>
                            </div>
                        </h5>
                    </div>
                </div>

                <!-- ward-card -->
                <div class="card mt-3 ml-2" style="width: 18rem;" id="patient-card">
                    <div class="card-img-top" id="patient-card-header">
                        <div class="center-block" id="ward-card-circle">
                            <img class="center-block" id="ward-image" src="{{ URL::to('/image/Kardiologie.png') }}" alt="PatientQrCode">
                        </div>
                    </div>

                    <div class="card-body">
                        <h2 class="card-title">{{ __('Kardiologie') }}</h2>
                        <div class="text-muted">
                            Aktiv
                        </div>
                    </div>

                    <div class="card-footer" id="formular-footer">
                        <h5>
                            <div class="row">
                                <a href="#" data-toggle="modal" data-target="#edit" id="patient-link">{{ __('Station bearbeiten') }}</a>
                            </div>
                            <div class="row">
                                <a href="#" data-toggle="modal" data-target="#deactivate" id="medical-report-link">{{ __('Deaktivieren') }}</a>
                            </div>
                        </h5>
                    </div>
                </div>

                <!-- ward-card -->
                <div class="card mt-3 ml-2" style="width: 18rem;" id="patient-card">
                    <div class="card-img-top" id="patient-card-header">
                        <div class="center-block" id="ward-card-circle">
                            <img class="center-block" id="ward-image" src="{{ URL::to('/image/Neurologie.png') }}" alt="PatientQrCode">
                        </div>
                    </div>

                    <div class="card-body">
                        <h2 class="card-title">{{ __('Neurologie') }}</h2>
                        <div class="text-muted">
                            Aktiv
                        </div>
                    </div>

                    <div class="card-footer" id="formular-footer">
                        <h5>
                            <div class="row">
                                <a href="#" data-toggle="modal" data-target="#edit" id="patient-link">{{ __('Station bearbeiten') }}</a>
                            </div>
                            <div class="row">
                                <a href="#" data-toggle="modal" data-target="#deactivate" id="medical-report-link">{{ __('Deaktivieren') }}</a>
                            </div>
                        </h5>
                    </div>
                </div>

                <!-- ward-card -->
                <div class="card mt-3 ml-2" style="width: 18rem;" id="patient-card">
                    <div class="card-img-top" id="patient-card-header">
                        <div class="center-block" id="ward-card-circle">
                            <img class="center-block" id="ward-image" src="{{ URL::to('/image/Notaufnahme.png') }}" alt="PatientQrCode">
                        </div>
                    </div>

                    <div class="card-body">
                        <h2 class="card-title">{{ __('Notaufnahme') }}</h2>
                        <div class="text-muted">
                            Aktiv
                        </div>
                    </div>

                    <div class="card-footer" id="formular-footer">
                        <h5>
                            <div class="row">
                                <a href="#" data-toggle="modal" data-target="#edit" id="patient-link">{{ __('Station bearbeiten') }}</a>
                            </div>
                            <div class="row">
                                <a href="#" data-toggle="modal" data-target="#deactivate" id="medical-report-link">{{ __('Deaktivieren') }}</a>
                            </div>
                        </h5>
                    </div>
                </div>

                <!-- ward-card -->
                <div class="card mt-3 ml-2" style="width: 18rem;" id="patient-card">
                    <div class="card-img-top" id="patient-card-header">
                        <div class="center-block" id="ward-card-circle">
                            <img class="center-block" id="ward-image" src="{{ URL::to('/image/Pneumologie.png') }}" alt="PatientQrCode">
                        </div>
                    </div>

                    <div class="card-body">
                        <h2 class="card-title">{{ __('Pneumologie') }}</h2>
                        <div class="text-muted">
                            Aktiv
                        </div>
                    </div>

                    <div class="card-footer" id="formular-footer">
                        <h5>
                            <div class="row">
                                <a href="#" data-toggle="modal" data-target="#edit" id="patient-link">{{ __('Station bearbeiten') }}</a>
                            </div>
                            <div class="row">
                                <a href="#" data-toggle="modal" data-target="#deactivate" id="medical-report-link">{{ __('Deaktivieren') }}</a>
                            </div>
                        </h5>
                    </div>
                </div>

                <!-- ward-card -->
                <div class="card mt-3 ml-2" style="width: 18rem;" id="patient-card">
                    <div class="card-img-top" id="patient-card-header">
                        <div class="center-block" id="ward-card-circle">
                            <img class="center-block" id="ward-image" src="{{ URL::to('/image/Radiologie.png') }}" alt="PatientQrCode">
                        </div>
                    </div>

                    <div class="card-body">
                        <h2 class="card-title">{{ __('Radiologie') }}</h2>
                        <div class="text-muted">
                            Aktiv
                        </div>
                    </div>

                    <div class="card-footer" id="formular-footer">
                        <h5>
                            <div class="row">
                                <a href="#" data-toggle="modal" data-target="#edit" id="patient-link">{{ __('Station bearbeiten') }}</a>
                            </div>
                            <div class="row">
                                <a href="#" data-toggle="modal" data-target="#deactivate" id="medical-report-link">{{ __('Deaktivieren') }}</a>
                            </div>
                        </h5>
                    </div>
                </div>

                <!-- ward-card -->
                <div class="card mt-3 ml-2" style="width: 18rem;" id="patient-card">
                    <div class="card-img-top" id="patient-card-header">
                        <div class="center-block" id="patient-card-circle">
                            <i class="fa fa-plus fa-5x" id="formular-manager-icon-plus"></i>
                        </div>
                    </div>

                    <div class="card-body">
                        <h2 class="card-title">{{ __('Neue Station') }}</h2>
                    </div>

                    <div class="card-footer" id="formular-footer">
                        <h5>
                            <div class="row">
                                <a href="#" class="card-link" id="patient-link">{{ __('Hinzufügen') }}</a>
                            </div>
                        </h5>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">

            <!-- edit-ward-modal-dialog -->
            <div class="modal-dialog">

                <!-- edit-ward-modal-content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title custom_align" id="Heading">{{ __('Station bearbeiten') }}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    </div>

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-4">

                                <!-- ward-icon -->
                                <div class="form-group">
                                    <div class="center-block" id="ward-card-circle">
                                        <img class="center-block" id="ward-image" src="{{ URL::to('/image/Gastroenterologie.png') }}" alt="PatientQrCode">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">

                                <!-- ward-name -->
                                <div class="form-group">
                                    <input class="form-control " type="text" placeholder="Stationsname">
                                </div>

                                <!-- select-ward-icon -->
                                <div class="form-group">
                                    <label for="selphoto" class="control-label">{{ __('Stations-Icon ändern.') }}</label>
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <span class="btn btn-primary btn-file" id="moki-button"><span class="fileupload-new">{{ __('Datei auswählen') }}</span>
                                            <span class="fileupload-exists">Ändern</span>
                                            <input type="file" /></span>
                                        <span class="fileupload-preview"></span>
                                        <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr/>


                        <!-- ward-rooms -->
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <label>{{ __('Zimmer zuweisen.') }}</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input checkbox-inline" id="001">
                                            <label class="custom-control-label" for="001">{{ __('001') }}</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input checkbox-inline" id="002">
                                            <label class="custom-control-label" for="002">{{ __('002') }}</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input checkbox-inline" id="003">
                                            <label class="custom-control-label" for="003">{{ __('003') }}</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input checkbox-inline" id="004">
                                            <label class="custom-control-label" for="004">{{ __('004') }}</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input checkbox-inline" id="005">
                                            <label class="custom-control-label" for="005">{{ __('005') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input checkbox-inline" id="101" checked>
                                            <label class="custom-control-label" for="101">{{ __('101') }}</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input checkbox-inline" id="102" checked>
                                            <label class="custom-control-label" for="102">{{ __('102') }}</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input checkbox-inline" id="103" checked>
                                            <label class="custom-control-label" for="103">{{ __('103') }}</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input checkbox-inline" id="104" checked>
                                            <label class="custom-control-label" for="104">{{ __('104') }}</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input checkbox-inline" id="105" checked>
                                            <label class="custom-control-label" for="105">{{ __('105') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input checkbox-inline" id="201">
                                            <label class="custom-control-label" for="201">{{ __('201') }}</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input checkbox-inline" id="202">
                                            <label class="custom-control-label" for="202">{{ __('202') }}</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input checkbox-inline" id="203">
                                            <label class="custom-control-label" for="203">{{ __('203') }}</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input checkbox-inline" id="204">
                                            <label class="custom-control-label" for="204">{{ __('204') }}</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input checkbox-inline" id="205">
                                            <label class="custom-control-label" for="205">{{ __('205') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input checkbox-inline" id="301">
                                            <label class="custom-control-label" for="301">{{ __('301') }}</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input checkbox-inline" id="302">
                                            <label class="custom-control-label" for="302">{{ __('302') }}</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input checkbox-inline" id="303">
                                            <label class="custom-control-label" for="303">{{ __('303') }}</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input checkbox-inline" id="304">
                                            <label class="custom-control-label" for="304">{{ __('304') }}</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input checkbox-inline" id="305">
                                            <label class="custom-control-label" for="305">{{ __('305') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input checkbox-inline" id="401">
                                            <label class="custom-control-label" for="401">{{ __('401') }}</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input checkbox-inline" id="402">
                                            <label class="custom-control-label" for="402">{{ __('402') }}</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input checkbox-inline" id="403">
                                            <label class="custom-control-label" for="403">{{ __('403') }}</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input checkbox-inline" id="404">
                                            <label class="custom-control-label" for="404">{{ __('404') }}</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input checkbox-inline" id="405">
                                            <label class="custom-control-label" for="405">{{ __('405') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input checkbox-inline" id="501">
                                            <label class="custom-control-label" for="501">{{ __('501') }}</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input checkbox-inline" id="502">
                                            <label class="custom-control-label" for="502">{{ __('502') }}</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input checkbox-inline" id="503">
                                            <label class="custom-control-label" for="503">{{ __('503') }}</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input checkbox-inline" id="504">
                                            <label class="custom-control-label" for="504">{{ __('504') }}</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input checkbox-inline" id="505">
                                            <label class="custom-control-label" for="505">{{ __('505') }}</label>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" placeholder="Neues Zimmer hinzufügen" name="search">
                                    </div>
                                    <div class="col-lg-3">
                                        <button class="btn btn-primary" id="moki-button" type="submit">{{ __('Hinzufügen') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer ">
                        <button type="button" class="btn btn-primary btn-lg" id="moki-button" data-dismiss="modal" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>{{ __(' Update') }}</button>
                    </div>
                </div>
                <!-- /.edit-ward-modal-content -->
            </div>
            <!-- /.edit-ward-modal-dialog -->
        </div>
    </div>

    <div class="modal fade" id="deactivate" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">

        <!-- deactivate-modal-dialog -->
        <div class="modal-dialog">

            <!-- deactivate-modal-content -->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title custom_align" id="Heading">{{ __('Station deaktivieren') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger">{{ __('Soll die Station deaktiviert werden?') }}<br>{{ __('Benutzer können dann nicht mehr auf die Station zugreifen!') }}</div>
                </div>
                <div class="modal-footer ">
                    <button type="button" class="btn btn-success" data-dismiss="modal" id="moki-button"><span class="glyphicon glyphicon-ok-sign"></span>{{ __(' Ja') }}</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>{{ __(' Nein') }}</button>
                </div>
            </div>
            <!-- /.deactivate-modal-content -->
        </div>
        <!-- /.deactivate-modal-dialog -->
    </div>

    <script>
        !function(e){
            var t=function(t,n){
                this.$element=e(t),
                    this.type=this.$element.data("uploadtype")||(this.$element.find(".thumbnail").length>0?"image":"file"),
                    this.$input=this.$element.find(":file");
                if(this.$input.length===0)
                    return;
                this.name=this.$input.attr("name")||n.name,
                    this.$hidden=this.$element.find('input[type=hidden][name="'+this.name+'"]'),
                this.$hidden.length===0&&(this.$hidden=e('<input type="hidden" />'),
                    this.$element.prepend(this.$hidden)),
                    this.$preview=this.$element.find(".fileupload-preview");
                var r=this.$preview.css("height");
                this.$preview.css("display")!="inline"&&r!="0px"&&r!="none"&&this.$preview.css("line-height",r),
                    this.original={exists:this.$element.hasClass("fileupload-exists"),
                        preview:this.$preview.html(),hiddenVal:this.$hidden.val()},
                    this.$remove=this.$element.find('[data-dismiss="fileupload"]'),
                    this.$element.find('[data-trigger="fileupload"]').on("click.fileupload",
                        e.proxy(this.trigger,this)),this.listen()};
            t.prototype={listen:function(){this.$input.on("change.fileupload",
                    e.proxy(this.change,this)),e(this.$input[0].form).on("reset.fileupload",
                    e.proxy(this.reset,this)),this.$remove&&this.$remove.on("click.fileupload",
                    e.proxy(this.clear,this))},change:function(e,t){if(t==="clear")return;
                    var n=e.target.files!==undefined?e.target.files[0]:e.target.value?{name:e.target.value.replace(/^.+\\/,"")}:null;if(!n){this.clear();
                        return
                    }
                    this.$hidden.val(""),this.$hidden.attr("name",""),this.$input.attr("name",this.name);if(this.type==="image"&&this.$preview.length>0&&(typeof n.type!="undefined"?n.type.match("image.*"):n.name.match(/\.(gif|png|jpe?g)$/i))&&typeof FileReader!="undefined"){var r=new FileReader,i=this.$preview,s=this.$element;r.onload=function(e){i.html('<img src="'+e.target.result+'" '+(i.css("max-height")!="none"?'style="max-height: '+i.css("max-height")+';"':"")+" />"),s.addClass("fileupload-exists").removeClass("fileupload-new")},r.readAsDataURL(n)}else this.$preview.text(n.name),this.$element.addClass("fileupload-exists").removeClass("fileupload-new")},clear:function(e){this.$hidden.val(""),this.$hidden.attr("name",this.name),this.$input.attr("name","");if(navigator.userAgent.match(/msie/i)){var t=this.$input.clone(!0);this.$input.after(t),this.$input.remove(),this.$input=t}else this.$input.val("");this.$preview.html(""),this.$element.addClass("fileupload-new").removeClass("fileupload-exists"),e&&(this.$input.trigger("change",["clear"]),e.preventDefault())},reset:function(e){this.clear(),this.$hidden.val(this.original.hiddenVal),this.$preview.html(this.original.preview),this.original.exists?this.$element.addClass("fileupload-exists").removeClass("fileupload-new"):this.$element.addClass("fileupload-new").removeClass("fileupload-exists")},trigger:function(e){this.$input.trigger("click"),e.preventDefault()}},e.fn.fileupload=function(n){return this.each(function(){var r=e(this),i=r.data("fileupload");i||r.data("fileupload",i=new t(this,n)),typeof n=="string"&&i[n]()})},e.fn.fileupload.Constructor=t,e(document).on("click.fileupload.data-api",'[data-provides="fileupload"]',function(t){var n=e(this);if(n.data("fileupload"))return;n.fileupload(n.data());var r=e(t.target).closest('[data-dismiss="fileupload"],[data-trigger="fileupload"]');r.length>0&&(r.trigger("click.fileupload"),t.preventDefault())})}(window.jQuery)
    </script>
@endsection