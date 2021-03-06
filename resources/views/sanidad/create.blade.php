@extends('sanidad.main')

@section('breadcrumb')
	<li><a href="{{ route('sanidad.index') }}">Sanidad</a></li>
	<li class="active">Nuevo</li>
@stop

@section('module')
	<div class="box box-success" id="sanidad-create">
		{!! Form::open(['id' => 'form-sanidad', 'data-toggle' => 'validator', 'files' => true]) !!}
	        <div class="box-header with-border">
	        <div class="box-body" id="render-form-sanidad">
				{{-- Render form sanidad --}}
			</div>
	        	<div class="row">
					<div class="col-md-2 col-sm-6 col-xs-6 text-left">
						<a href="{{ route('sanidad.index') }}" class="btn btn-default btn-sm btn-block">{{ trans('app.cancel') }}</a>
					</div>
					<div class="col-md-2 col-md-offset-8 col-sm-6 col-xs-6 text-right">
						<button type="submit" class="btn btn-primary btn-sm btn-block">{{ trans('app.create') }}</button>
					</div>
				</div>
			</div>
			
		{!! Form::close() !!}
	</div>
@stop