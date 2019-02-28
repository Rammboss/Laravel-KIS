@extends('layouts.administration-area')

@section('content')
    <div id="page-wrapper">
        <div class="col-lg-12">
            <h1 class="page-header"></h1>

            <!-- card -->
            <div class="card">
                <div class="card-header">
                    {{ __('Formular Körperliche Untersuchung') }}
                </div>

                <!-- card-content -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">

                            <!-- table -->
                            <div class="table-responsive">
                                <table id="mytable" class="table table-bordred table-striped">
                                    <thead>
                                    <tr>
                                        <th>{{ __('Name') }}</th>
                                        <th>{{ __('Text ändern') }}</th>
                                        <th>{{ __('Größe') }}</th>
                                        <th>{{ __('Status') }}</th>
                                        <th>{{ __('Bearbeiten') }}</th>
                                        <th>{{ __('Löschen') }}</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr onClick="setActiveRow(this)">
                                        <td class="data">{{ __('Körperliche Untersuchung') }}</td>
                                        <td onclick="changeName(this)">
                                            <button class="btn btn-primary" id="moki-button">
                                                <i class="fa fa-pencil"></i>
                                            </button>
                                        </td>
                                        <td><input type="text" class="form-control" style="max-width: 20%" id="recent_anamnesis" name="recent_anamnesis" value="4"></td>
                                        <td class="data">{{ __('Aktiv') }}</td>
                                        <td onclick="deactivateField(this)"><a href="#">{{ __('Deaktivieren') }}</a></td>
                                        <td onclick="deleteRow(this)">
                                            <button class="btn btn-danger" id="trash-button">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    <tr onClick="setActiveRow(this)">
                                        <td>{{ __('Verdachtsdiagnose') }}</td>
                                        <td onclick="changeName(this)">
                                            <button class="btn btn-primary" id="moki-button">
                                                <i class="fa fa-pencil"></i>
                                            </button>
                                        </td>
                                        <td><input type="text" class="form-control" style="max-width: 20%" id="previous_anamnesis" name="previous_anamnesis" value="1"></td>
                                        <td class="data">{{ __('Aktiv') }}</td>
                                        <td onclick="deactivateField(this)"><a href="#">{{ __('Deaktivieren') }}</a></td>
                                        <td onclick="deleteRow(this)">
                                            <button class="btn btn-danger" id="trash-button">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    <tr onClick="setActiveRow(this)">
                                        <td>
                                            <input type="text" id="new-input" class="form-control">
                                        </td>
                                        <td></td>
                                        <td><input type="text" class="form-control" style="max-width: 20%" id="new-value" name="new-value" value=""></td>
                                        <td onClick="newRow(this)"><button class="btn btn-primary" id="moki-button">Feld hinzufügen</button></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <a href="javascript:moveActiveRow(-1)">
                            <button class="btn btn-success" id="arrow-button-up">
                                <i class="fa fa-angle-up fa-2x"></i>
                            </button>
                        </a>
                        <a href="javascript:moveActiveRow(1)">
                            <button class="btn btn-success" id="arrow-button-down">
                                <i class="fa fa-angle-down fa-2x"></i>
                            </button>
                        </a>
                        <input class="btn btn-primary btn-lg" onClick="setMoveActive()" type="button" value="Felder verschieben aktivieren" id="change-field-button">
                    </div>
                </div>
                <!-- /.card-content -->
            </div>
            <!-- /.card -->
        </div>
    </div>

    <script>
        var moveActive = false;
        var editActive = false;

        // Select row as active
        function setMoveActive() {
            let rows = document.getElementById('mytable').rows;
            if (moveActive) {
                moveActive = false;
                for(var i = 0; i < rows.length; i++) {
                    if (rows[i].rowIndex % 2 !== 0) {
                        rows[i].style.backgroundColor = "rgba(0,0,0,.05)";
                    } else {
                        rows[i].style.backgroundColor = "white";
                    }
                }
                document.getElementById("arrow-button-up").disabled = true;
                document.getElementById("arrow-button-down").disabled = true;
                document.getElementById("trash-button").disabled = false;
                document.getElementById("change-field-button").value = "Felder verschieben aktivieren";
                for(var j = 1; j < rows.length - 1; j++) {
                    rows[j].children[1].firstElementChild.disabled = false;
                    rows[j].children[2].firstElementChild.disabled = false;
                    if (rows[j].children[4].innerHTML === 'Deaktivieren') {
                        rows[j].children[4].innerHTML = '<a href="#">{{ __('Deaktivieren') }}</a>'
                    } else {
                        rows[j].children[4].innerHTML = '<a href="#">{{ __('Aktivieren') }}</a>'
                    }
                    rows[j].children[5].firstElementChild.disabled = false;
                }
                rows[rows.length - 1].children[0].firstElementChild.disabled = false;
                rows[rows.length - 1].children[2].firstElementChild.disabled = false;
                rows[rows.length - 1].children[3].firstElementChild.disabled = false;
            } else {
                document.getElementById("arrow-button-up").disabled = false;
                document.getElementById("arrow-button-down").disabled = false;
                document.getElementById("change-field-button").value = "Speichern";
                moveActive = true;
                for(var idx = 1; idx < rows.length - 1; idx++) {
                    rows[idx].children[1].firstElementChild.disabled = true;
                    rows[idx].children[2].firstElementChild.disabled = true;
                    if (rows[idx].children[4].innerHTML === '<a href="#">Deaktivieren</a>') {
                        rows[idx].children[4].innerHTML = '{{ __('Deaktivieren') }}'
                    } else {
                        rows[idx].children[4].innerHTML = '{{ __('Aktivieren') }}'
                    }
                    rows[idx].children[5].firstElementChild.disabled = false;
                    rows[idx].children[5].firstElementChild.disabled = true;
                }
                rows[rows.length - 1].children[0].firstElementChild.disabled = true;
                rows[rows.length - 1].children[2].firstElementChild.disabled = true;
                rows[rows.length - 1].children[3].firstElementChild.disabled = true;
            }
        }

        (function ($) {
            $('.spinner .btn:first-of-type').on('click', function() {
                $('.spinner input').val( parseInt($('.spinner input').val(), 10) + 1);
            });
            $('.spinner .btn:last-of-type').on('click', function() {
                $('.spinner input').val( parseInt($('.spinner input').val(), 10) - 1);
            });
        })(jQuery);

        var activeRow = 1;

        // Select row as active
        function setActiveRow(el) {
            if (!moveActive) {
                return false;
            }
            var rows = document.getElementById('mytable').rows;
            if (activeRow === el.rowIndex) {
                if (activeRow % 2 !== 0) {
                    rows[activeRow].style.backgroundColor = "rgba(0,0,0,.05)";
                    activeRow = 0;
                    return false;
                } else {
                    rows[activeRow].style.backgroundColor = "white";
                    activeRow = 0;
                    return false;
                }
            }
            for(var i = 0; i < rows.length; i++) {
                if(rows[i] === el) {
                    rows[i].style.backgroundColor = "#80ba24";
                    activeRow = i;
                } else {

                }
            }
            for(var j = 0; j < rows.length; j++) {
                if(rows[j] !== el) {
                    if (rows[j].rowIndex % 2 !== 0) {
                        rows[j].style.backgroundColor = "rgba(0,0,0,.05)";
                    } else {
                        rows[j].style.backgroundColor = "white";
                    }
                }
            }
        }

        // Move active row up or down
        function moveActiveRow(move) {
            if (moveActive) {
                var rows = document.getElementById('mytable').rows;
                if (activeRow+move !== 0) {
                    var oldRow = rows[activeRow].innerHTML;
                    rows[activeRow].innerHTML = rows[activeRow + move].innerHTML;
                    rows[activeRow+move].innerHTML = oldRow;
                    setActiveRow(rows[activeRow+move]);
                }
            }
        }

        // Deactivate content
        function deactivateField(el) {
            var cellIndex  = el.cellIndex - 1;
            let rowIndex = el.parentNode.rowIndex;
            var rows = document.getElementById('mytable').rows;
            if (rows[rowIndex].cells[cellIndex].innerText === '{{ __('Aktiv') }}') {
                rows[rowIndex].cells[cellIndex].innerText = '{{ __('Nicht aktiv') }}';
                rows[rowIndex].cells[cellIndex + 1].innerHTML = '<a href="#">{{ __('Aktivieren') }}</a>';
            } else {
                rows[rowIndex].cells[cellIndex].innerText = '{{ __('Aktiv') }}';
                rows[rowIndex].cells[cellIndex + 1].innerHTML = '<a href="#">{{ __('Deaktivieren') }}</a>';
            }
        }

        // Change name
        function changeName(el) {
            var cellIndex  = 0;
            let rowIndex = el.parentNode.rowIndex;
            var rows = document.getElementById('mytable').rows;
            if (!editActive || rows[rowIndex].cells[cellIndex + 1].innerHTML === '<button class="btn btn-danger" id="save-button"><i class="fa fa-save"></i></button>') {
                editActive = true;
                document.getElementById("change-field-button").disabled = true;
                var actualText = rows[rowIndex].cells[cellIndex].innerText;
                if (rows[rowIndex].cells[cellIndex + 1].innerHTML !== '<button class="btn btn-danger" id="save-button"><i class="fa fa-save"></i></button>') {
                    rows[rowIndex].cells[cellIndex].innerHTML = '<input type="text" id="temp-input" class="form-control" value="' + actualText + '">';
                    rows[rowIndex].cells[cellIndex + 1].innerHTML = '<button class="btn btn-danger" id="save-button"><i class="fa fa-save"></i></button>';
                } else {
                    if (document.getElementById("temp-input").value === "") {
                        alert("Bitte Namen eingeben!")
                    } else {
                        rows[rowIndex].cells[cellIndex].innerText = document.getElementById("temp-input").value;
                        rows[rowIndex].cells[cellIndex + 1].innerHTML = '<button class="btn btn-primary" id="moki-button"><i class="fa fa-pencil"></i></button>';
                        editActive = false;
                        document.getElementById("change-field-button").disabled = false;
                    }
                }
            }
        }

        // Insert new row
        function newRow(el) {
            var table = document.getElementById('mytable');
            var rows = document.getElementById('mytable').rows;
            var lastRow = rows[rows.length -1];
            var newText = document.getElementById("new-input").value;
            var newValue = document.getElementById("new-value").value;
            lastRow.outerHTML = '<tr onClick="setActiveRow(this)">\n' +
                '                                    <td>' + newText + '</td>\n' +
                '                                    <td onclick="changeName(this)">\n' +
                '                                        <button class="btn btn-primary" id="moki-button">\n' +
                '                                            <i class="fa fa-pencil"></i>\n' +
                '                                        </button>\n' +
                '                                    </td>\n' +
                '                                    <td><input type="text" class="form-control" style="max-width: 20%" id=" ' + newText + ' " name=" ' + newText + ' " value=" ' + newValue + '"></td>\n' +
                '                                    <td class="data">Nicht Aktiv</td>\n' +
                '                                    <td onclick="deactivateField(this)"><a href="#">Aktivieren</a></td>\n' +
                '                                    <td onclick="deleteRow(this)">\n' +
                '                                        <button class="btn btn-danger" id="trash-button">\n' +
                '                                            <i class="fa fa-trash-o"></i>\n' +
                '                                        </button>\n' +
                '                                    </td>\n' +
                '                                    </tr>';

            var row = table.insertRow(rows.length);
            row.outerHTML = '<tr onClick="setActiveRow(this)">\n' +
                '                                    <td>\n' +
                '                                        <input type="text" id="new-input" class="form-control">\n' +
                '                                    </td>\n' +
                '                                    <td></td>\n' +
                '                                    <td><input type="text" class="form-control" style="max-width: 20%" id="new-value" name="new-value" value=""></td>\n' +
                '                                    <td onClick="newRow(this)"><button class="btn btn-primary" data-toggle="modal" data-target="#new-user" id="moki-button">Feld hinzufügen</button></td>\n' +
                '                                    <td></td>\n' +
                '                                    <td></td>\n' +
                '                                </tr>';
        }

        // Delete selected row
        function deleteRow(el) {
            if (!editActive) {
                if (confirm("Soll die Zeile wirklich gelöscht werden?")) {
                    document.getElementById("mytable").deleteRow(el.parentNode.rowIndex);
                    var rows = document.getElementById('mytable').rows;
                    for(var j = 0; j < rows.length; j++) {
                        if(rows[j] !== el) {
                            if (rows[j].rowIndex % 2 !== 0) {
                                rows[j].style.backgroundColor = "rgba(0,0,0,.05)";
                            } else {
                                rows[j].style.backgroundColor = "white";
                            }
                        }
                    }
                }
            }
        }

        // Disable arrow buttons on page load
        document.getElementById("arrow-button-up").disabled = true;
        document.getElementById("arrow-button-down").disabled = true;

    </script>
@endsection
