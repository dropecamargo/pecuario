@extends('sanidad.main')

@section('breadcrumb')
	<li><a href="{{ route('sanidad.index')}}">Sanidad</a></li>
    <li class="active">{{ $sanidad->id }}</li>
@stop

@section('module')
    <div class="box box-success">
        <div class="box-header with-border">
            <div class="row">
                <div class="col-md-2 col-sm-12 col-xs-12 text-left">
                    <a href="{{ route('sanidad.index') }}" class="btn btn-default btn-sm btn-block">{{ trans('app.comeback') }}</a>
                </div>    
                <div class="col-md-2 col-md-offset-8 col-sm-6 col-xs-6 text-right">
                    <a href="{{ route('sanidad.edit', ['sanidad' => $sanidad->id]) }}" class="btn btn-primary btn-sm btn-block">{{ trans('app.edit') }}</a>
                </div>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="form-group col-md-2">
                    <label class="control-label">Código</label>
                    <div>{{ $sanidad->id }}</div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-2">
                    <label class="control-label">Nombre</label>
                    <div>{{ $sanidad->sanidad_actividad }}</div>
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col-md-2">
                    <label class="control-label">Nombre</label>
                    <div>{{ $sanidad->sanidad_nombre }}</div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-2">
                    <label class="control-label">Nombre</label>
                    <div>{{ $sanidad->sanidad_lote }}</div>
                </div>
            </div>
        </div>
    </div>
    </div>
@stop