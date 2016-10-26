@extends('referencias.lote.main')

@section('breadcrumb')
	<li><a href="{{ route('lote.index')}}">Lote</a></li>
    <li class="active">{{ $lote->id }}</li>
@stop

@section('module')
    <div class="box box-success">
        <div class="box-header with-border">
            <div class="row">
                <div class="col-md-2 col-sm-12 col-xs-12 text-left">
                    <a href="{{ route('lote.index') }}" class="btn btn-default btn-sm btn-block">{{ trans('app.comeback') }}</a>
                </div>    
                <div class="col-md-2 col-md-offset-8 col-sm-6 col-xs-6 text-right">
                    <a href="{{ route('lote.edit', ['lote' => $lote->id]) }}" class="btn btn-primary btn-sm btn-block">{{ trans('app.edit') }}</a>
                </div>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="form-group col-md-2">
                    <label class="control-label">Código</label>
                    <div>{{ $lote->id }}</div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-8">
                    <label class="control-label">Nombre</label>
                    <div>{{ $lote->lote_nombre }}</div>
                    </div>
            </div>
            <div class="row">
                <div class="form-group col-md-8">
                    <label class="control-label">Descripcion</label>
                    <div>{{ $lote->lote_descripcion }}</div>
                    </div>
            </div>
            <div class="row">
                <div class="form-group col-md-8">
                    <label class="control-label">Color</label>
                    <div>{{ $lote->lote_color }}</div>
                    </div>
            </div>
        </div>
    </div>
@stop