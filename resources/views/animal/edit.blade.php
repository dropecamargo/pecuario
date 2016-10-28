@extends('animal.main')

@section('breadcrumb')	
	<li><a href="{{ route('animal.index') }}">Animal</a></li>
	<li><a href="{{ route('animal.show', ['animal' => $animal->animal_id]) }}">{{ $animal->animal_id }}</a></li>
	<li class="active">Editar</li>
@stop

@section('module')
	<div class="box box-success" id="animal-create">
	 	{!! Form::open(['id' => 'form-animal', 'data-toggle' => 'validator']) !!}			
	        <div class="box-header with-border">
	        	<div class="row">
					<div class="col-md-2 col-sm-6 col-xs-6 text-left">
						<a href="{{ route('animal.show', ['animal' => $animal->animal_id]) }}" class="btn btn-default btn-sm btn-block">{{ trans('app.cancel') }}</a>
					</div>
					<div class="col-md-2 col-md-offset-8 col-sm-6 col-xs-6 text-right">
						<button type="submit" class="btn btn-primary btn-sm btn-block">{{ trans('app.save') }}</button>
					</div>
				</div>
			</div>

			<div class="box-body" id="render-form-animal">
				{{-- Render form animal --}}
			</div>
		{!! Form::close() !!}
	</div>
@stop