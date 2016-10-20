@extends('referencias.razas.main')

@section('breadcrumb')
	<li class="active">Razas</li>
@stop

@section('module')
	<div id="razas-main">
        <div class="box box-success">
            <div class="box-body table-responsive">
                <table id="razas-search-table" class="table table-bordered table-striped" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Raza</th>
                            <th>Activa</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@stop