@extends('referencias.hato.main')

@section('breadcrumb')
    <li class="active">Hato</li>
@stop

@section('module')
    <div id="hato-main">
        <div class="box box-success">
            <div class="box-body table-responsive">
                <table id="hato-search-table" class="table table-bordered table-striped" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Activa</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@stop