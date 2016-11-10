@extends('referencias.peso.main')

@section('breadcrumb')
	<li><a href="{{ route('peso.index')}}">Peso</a></li>
    <li class="active">{{ $peso->id }}</li>
@stop

@section('module')
    <div class="box box-success">
        <div class="box-header with-border">
            <div class="row">
                <div class="col-md-2 col-sm-12 col-xs-12 text-left">
                    <a href="{{ route('peso.index') }}" class="btn btn-default btn-sm btn-block">{{ trans('app.comeback') }}</a>
                </div>    
                <div class="col-md-2 col-md-offset-8 col-sm-6 col-xs-6 text-right">
                    <a href="{{ route('peso.edit', ['peso' => $peso->id]) }}" class="btn btn-primary btn-sm btn-block">{{ trans('app.edit') }}</a>
                </div>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="form-group col-md-2">
                    <label class="control-label">Código</label>
                    <div>{{ $peso->id }}</div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-8">
                    <label class="control-label">Nombre</label>
                    <div>{{ $peso->peso_animal }}</div>
            </div>
            <div class="row">
                <div class="form-group col-md-8">
                    <label class="control-label">Lote</label>
                    <div>{{ $peso->peso_lote }}</div>
            </div>
        </div>
        <div class="row">
                <div class="form-group col-md-8">
                    <label class="control-label">Observaciones</label>
                    <div>{{ $peso->peso_observaciones }}</div>
            </div>
        </div>
    </div>
@stop