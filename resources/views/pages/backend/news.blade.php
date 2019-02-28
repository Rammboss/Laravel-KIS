@extends('layouts.administration-area')

@section('content')
    <div id="page-wrapper">
        <div class="col-lg-12">
            <h1 class="page-header">{{ __('News') }}</h1>
            <nav>
                <!-- new-navigation -->
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-fields-tab nav-tab" data-toggle="tab" href="#nav-new" role="tab" aria-controls="nav-new" aria-selected="true">Neue News</a>
                    <a class="nav-item nav-link " id="nav-home-tab nav-tab" data-toggle="tab" href="#nav-all" role="tab" aria-controls="nav-all" aria-selected="true">Alle News</a>
                </div>
            </nav>
            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                <div class="tab-pane show active" id="nav-new" role="tabpanel" aria-labelledby="nav-fields-tab">
                    <div class="container">
                        <div class="row">

                            <!-- add-new-news -->
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <input class="form-control " type="text" placeholder="Titel">
                                </div>
                                <div class="form-group">
                                    <input class="form-control " type="text" placeholder="Untertitel">
                                </div>
                                <div class="form-group">
                                    <input class="form-control " type="text" placeholder="Kurzbeschreibung">
                                </div>
                                <div id="summernote"></div>
                                <script>
                                    $('#summernote').summernote({
                                        placeholder: '',
                                        tabsize: 2,
                                        height: 165
                                    });
                                </script>
                            </div>

                            <!-- publish-area -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <div class="card">
                                        <div class="card-header">
                                            {{ __('Veröffentlichen') }}
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <button class="btn btn-primary" id="moki-button">{{ __('Entwurf speichern') }}</button>
                                                <a href="#" id="moki-button" style="float:right" class="btn btn-success">{{ __('Vorschau') }}</a>
                                            </div>
                                            <div class="form-group">
                                                <p><label><i class="fa fa-user fa-fw"></i>{{ __(' Status: Entwurf') }}
                                                        <a href="#">{{ __(' Bearbeiten') }}</a>
                                                    </label></p>
                                                <p><label><i class="fa fa-eye fa-fw"></i>{{ __(' Sichtbarkeit: Öffentlich') }}
                                                        <a href="#">{{ __(' Bearbeiten') }}</a>
                                                    </label></p>
                                                <p><label><i class="fa fa-calendar fa-fw"></i>{{ __(' Veröffentlichen: Sofort') }}
                                                        <a href="#">{{ __(' Bearbeiten') }}</a>
                                                    </label></p>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button class="btn btn-md btn-danger" id="delete-button">{{ __('Löschen') }}</button>
                                            <a href="#" id="moki-button" style="float:right" class="btn btn-md btn-success">{{ __('Veröffentlichen') }}</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.publish-area -->

                                <!-- background-image -->
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" aria-expanded="true" data-parent="#accordion" href="#collapseOne">
                                                    {{ __('Hintergrundbild') }}
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg" alt="First slide">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="form-group">
                                                            <label for="selphoto" class="control-label">{{ __('Hintergrund-Bild hinzufügen.') }}</label>
                                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                                <span class="btn btn-primary btn-file" id="moki-button"><span class="fileupload-new">{{ __('Datei auswählen') }}</span>
                                                                    <span class="fileupload-exists">{{ __('Ändern') }}</span>
                                                                    <input type="file" /></span>
                                                                <span class="fileupload-preview"></span>
                                                                <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-footer">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.background-image -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- news-table -->
                <div class="tab-pane fade" id="nav-all" role="tabpanel" aria-labelledby="nav-all">
                    <div class="card">
                        <div class="card-header">
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Eintrag" aria-label="Search">
                                <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">{{ __('Suchen') }}</button>
                            </form>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table id="mytable" class="table table-bordred table-striped">
                                            <thead>
                                            <tr>
                                                <th><label for="checkall"></label><input type="checkbox" id="checkall" /></th>
                                                <th>{{ __('Titel') }}</th>
                                                <th>{{ __('Untertitel') }}</th>
                                                <th>{{ __('Status') }}</th>
                                                <th>{{ __('Sichtbarkeit') }}</th>
                                                <th>{{ __('Autor') }}</th>
                                                <th>{{ __('Datum') }}</th>
                                                <th>{{ __('Bearbeiten') }}</th>
                                                <th>{{ __('Löschen') }}</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <label>
                                                        <input type="checkbox" class="checkthis" />
                                                    </label>
                                                </td>
                                                <td>{{ __('Demenz') }}</td>
                                                <td>{{ __('Bluttest entdeckt Alzheimer Jahre vor den ersten Symptomen.') }}</td>
                                                <td>{{ __('Veröffentlicht') }}</td>
                                                <td>{{ __('Öffentlich') }}</td>
                                                <td>{{ __('Admin') }}</td>
                                                <td>{{ __('11.01.2019') }}</td>
                                                <td><p data-placement="top" data-toggle="tooltip"><button class="btn btn-primary btn-xs" id="edit-button" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                                <td><p data-placement="top" data-toggle="tooltip"><button class="btn btn-danger btn-xs" id="delete-button" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button></p></td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label>
                                                        <input type="checkbox" class="checkthis" />
                                                    </label>
                                                </td>
                                                <td>{{ __('Influenza') }}</td>
                                                <td>{{ __('Jetzt Impfen! Schützen Sie sich und andere vor der saisonalen Influenza!') }}</td>
                                                <td>{{ __('Veröffentlicht') }}</td>
                                                <td>{{ __('Öffentlich') }}</td>
                                                <td>{{ __('Admin') }}</td>
                                                <td>{{ __('11.01.2019') }}</td>
                                                <td><p data-placement="top" data-toggle="tooltip"><button class="btn btn-primary btn-xs" id="edit-button" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                                <td><p data-placement="top" data-toggle="tooltip"><button class="btn btn-danger btn-xs" id="delete-button" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label>
                                                        <input type="checkbox" class="checkthis" />
                                                    </label>
                                                </td>
                                                <td>{{ __('Wartung') }}</td>
                                                <td>{{ __('Wartung der Server') }}</td>
                                                <td>{{ __('Veröffentlicht') }}</td>
                                                <td>{{ __('Öffentlich') }}</td>
                                                <td>{{ __('Admin') }}</td>
                                                <td>{{ __('03.02.2019') }}</td>
                                                <td><p data-placement="top" data-toggle="tooltip"><button class="btn btn-primary btn-xs" id="edit-button" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                                <td><p data-placement="top" data-toggle="tooltip"><button class="btn btn-danger btn-xs" id="delete-button" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label>
                                                        <input type="checkbox" class="checkthis" />
                                                    </label>
                                                </td>
                                                <td>{{ __('Betriebsratswahlen') }}</td>
                                                <td>{{ __('Am 12.02.2019 sind Betriebratswahlen. Raum: G10.2.05') }}</td>
                                                <td>{{ __('Entwurf') }}</td>
                                                <td>{{ __('Öffentlich') }}</td>
                                                <td>{{ __('Admin') }}</td>
                                                <td>{{ __('04.02.2019') }}</td>
                                                <td><p data-placement="top" data-toggle="tooltip"><button class="btn btn-primary btn-xs" id="edit-button" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                                <td><p data-placement="top" data-toggle="tooltip"><button class="btn btn-danger btn-xs" id="delete-button" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                                            </tr>
                                            </tbody>

                                        </table>
                                        <div class="clearfix"></div>
                                        <ul class="pagination pull-right">
                                            <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                                            <li class="active"><a href="#">{{ __('1') }}</a></li>
                                            <li><a href="#">{{ __('2') }}</a></li>
                                            <li><a href="#">{{ __('3') }}</a></li>
                                            <li><a href="#">{{ __('4') }}</a></li>
                                            <li><a href="#">{{ __('5') }}</a></li>
                                            <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                                        </ul>{{ __('') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.news-table -->

                <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">

                    <!-- edit-news-modal-dialog -->
                    <div class="modal-dialog">

                        <!-- edit-news-modal-content -->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title custom_align" id="Heading">{{ __('News bearbeiten') }}</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <input class="form-control " type="text" placeholder="Titel">
                                </div>
                                <div class="form-group">
                                    <input class="form-control " type="text" placeholder="Untertitel">
                                </div>
                                <div class="form-group">
                                    <input class="form-control " type="text" placeholder="Kurzbeschreibung">
                                </div>
                                <div class="form-group">
                                    <textarea rows="2" class="form-control" placeholder="Inhalt"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="sel1">Status</label>
                                    <select class="form-control" id="sel1">
                                        <option>{{ __('Entwurf') }}</option>
                                        <option>{{ __('Veröffentlicht') }}</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="sel1">{{ __('Sichtbarkeit') }}</label>
                                    <select class="form-control" id="sel1">
                                        <option>{{ __('Öffentlich') }}</option>
                                        <option>{{ __('Nur Administrator') }}</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input class="form-control " type="text" placeholder="Autor">
                                        </div>
                                        <div class="col-lg-6">
                                            <input class="form-control " type="text" placeholder="Datum">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-primary btn-lg" id="moki-button" data-dismiss="modal" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>{{ __(' Aktualisieren') }}</button>
                            </div>
                        </div>
                        <!-- /.edit-news-modal-content -->
                    </div>
                    <!-- /.edit-news-modal-dialog -->
                </div>

                <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">

                    <!-- delete-news-modal-dialog -->
                    <div class="modal-dialog">

                        <!-- delete-news-modal-content -->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title custom_align" id="Heading">{{ __('Eintrag löschen') }}</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                            </div>
                            <div class="modal-body">

                                <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span>{{ __(' Soll der Eintrag entgültig gelöscht werden?') }}</div>

                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-success" data-dismiss="modal" id="moki-button"><span class="glyphicon glyphicon-ok-sign"></span>{{ __(' Ja') }}</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>{{ __(' Nein') }}</button>
                            </div>
                        </div>
                        <!-- /.delete-news-modal-content -->
                    </div>
                    <!-- /.delete-news-modal-dialog -->
                </div>
            </div>
        </div>
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

        $(document).ready(function(){
            $("#mytable #checkall").click(function () {
                if ($("#mytable #checkall").is(':checked')) {
                    $("#mytable input[type=checkbox]").each(function () {
                        $(this).prop("checked", true);
                    });

                } else {
                    $("#mytable input[type=checkbox]").each(function () {
                        $(this).prop("checked", false);
                    });
                }
            });

            $("[data-toggle=tooltip]").tooltip();
        });
    </script>
@endsection