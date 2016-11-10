@extends('referencias.actividad.main')

@section('breadcrumb')
	<li class="active">Actividad</li>
@stop

@section('module')
	<div id="actividad-main">
        <div class="box box-success">
            <div class="box-body table-responsive">
                <table id="actividad-search-table" class="table table-bordered table-striped" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <td>Codigo</td>
                            <th>actividad</th>
                            <th>Activa</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@stop