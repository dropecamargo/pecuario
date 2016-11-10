@extends('referencias.especies.main')

@section('breadcrumb')
	<li class="active">Especies</li>
@stop

@section('module')
    <div id="especies-main">
        <div class="box box-success">
            <div class="box-body table-responsive">
                <table id="especies-search-table" class="table table-bordered table-striped" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Activa</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@stop