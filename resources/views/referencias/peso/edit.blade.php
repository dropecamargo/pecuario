@extends('referencias.peso.main')

@section('breadcrumb')	
	<li><a href="{{ route('peso.index') }}">Peso</a></li>
	<li><a href="{{ route('peso.show', ['peso' => $peso->id]) }}">{{ $peso->id }}</a></li>
	<li class="active">Editar</li>
@stop

@section('module')
	<div class="box box-success" id="peso-create">
	<div class="box box-success" id="peso-create">
			<div class="box-body" id="render-form-peso">
				{{-- Render form peso --}}
			</div>
			</div>
	 	{!! Form::open(['id' => 'form-peso', 'data-toggle' => 'validator']) !!}			
	        <div class="box-header with-border">
	        	<div class="row">
					<div class="col-md-2 col-sm-6 col-xs-6 text-left">
						<a href="{{ route('peso.show', ['peso' => $peso->id]) }}" class="btn btn-default btn-sm btn-block">{{ trans('app.cancel') }}</a>
					</div>
					<div class="col-md-2 col-md-offset-8 col-sm-6 col-xs-6 text-right">
						<button type="submit" class="btn btn-primary btn-sm btn-block">{{ trans('app.save') }}</button>
					</div>
				</div>
			</div>

		{!! Form::close() !!}
	</div>
@stop