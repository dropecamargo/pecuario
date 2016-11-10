@extends('referencias.lote.main')

@section('breadcrumb')
    <li class="active">Lote</li>
@stop

@section('module')
    <div id="lote-main">
        <div class="box box-success">
            <div class="box-body table-responsive">
                <table id="lote-search-table" class="table table-bordered table-striped" cellspacing="0" width="100%">
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