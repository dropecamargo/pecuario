@extends('referencias.especies.main')

@section('breadcrumb')	
	<li><a href="{{ route('especies.index') }}">Especies</a></li>
	<li><a href="{{ route('especies.show', ['especies' => $especies->id]) }}">{{ $especies->id }}</a></li>
	<li class="active">Editar</li>
@stop

@section('module')
	<div class="box box-success" id="especie-create">
	 	{!! Form::open(['id' => 'form-especie', 'data-toggle' => 'validator']) !!}			
	        <div class="box-header with-border">
	        	<div class="row">
					<div class="col-md-2 col-sm-6 col-xs-6 text-left">
						<a href="{{ route('especies.show', ['especies' => $especies->id]) }}" class="btn btn-default btn-sm btn-block">{{ trans('app.cancel') }}</a>
					</div>
					<div class="col-md-2 col-md-offset-8 col-sm-6 col-xs-6 text-right">
						<button type="submit" class="btn btn-primary btn-sm btn-block">{{ trans('app.save') }}</button>
					</div>
				</div>
			</div>

			<div class="box-body" id="render-form-especie">
				{{-- Render form especie --}}
			</div>
		{!! Form::close() !!}
	</div>
@stop