@extends('layout.layout')

@section('title') Actividad @stop

@section('content')
	<section class="content-header">
		<h1>Actividad</h1>
		<ol class="breadcrumb">
			<li><a href="{{ route('dashboard') }}"></i> {{trans('app.home')}}</a></li>
			@yield('breadcrumb')
		</ol>
	</section>

	<section class="content">
		@yield('module')
	</section>
@stop