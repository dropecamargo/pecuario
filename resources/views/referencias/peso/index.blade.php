@extends('referencias.peso.main')

@section('breadcrumb')
	<li class="active">Peso</li>
@stop

@section('module')
    <div id="peso-main">
        <div class="box box-success">
            <div class="box-body table-responsive">
                <table id="peso-search-table" class="table table-bordered table-striped" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Animal</th>
                            <th>Lote</th>
                            <th>Cambialote</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@stop