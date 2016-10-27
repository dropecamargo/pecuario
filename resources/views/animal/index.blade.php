@extends('animal.main')

@section('breadcrumb')
    <li class="active">animal</li>
@stop

@section('module')
    <div id="animal-main">
        <div class="box box-success">
            <div class="box-body table-responsive">
                <table id="animal-search-table" class="table table-bordered table-striped" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Numero</th>
                            <th>Nombre</th>
                            <th>Especie</th>
                            <th>Raza</th>
                            <th>Lote</th>
                            <th>Activo</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@stop