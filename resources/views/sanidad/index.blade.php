@extends('sanidad.main')

@section('breadcrumb')
	<li class="active">Sanidad</li>
@stop

@section('module')
    <div id="sanidad-main">
        <div class="box box-success">
            <div class="box-body table-responsive">
                <table id="sanidad-search-table" class="table table-bordered table-striped" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Actividad</th>
                            <th>Animal</th>
                            <th>Nombre</th>
                            <th>Lote</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@stop