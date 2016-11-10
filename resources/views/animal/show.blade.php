@extends('animal.main')

@section('breadcrumb')
<li><a href="{{ route('animal.index')}}">Animal</a></li>
   <li class="active">{{ $animal->id }}</li>
@stop

@section('module')
   <div class="box box-success">
       <div class="box-header with-border">
           <div class="row">
               <div class="col-md-2 col-sm-12 col-xs-12 text-left">
                   <a href="{{ route('animal.index') }}" class="btn btn-default btn-sm btn-block">{{ trans('app.comeback') }}</a>
               </div>    
               <div class="col-md-2 col-md-offset-8 col-sm-6 col-xs-6 text-right">
                   <a href="{{ route('animal.edit', ['animal' => $animal->id]) }}" class="btn btn-primary btn-sm btn-block">{{ trans('app.edit') }}</a>
               </div>
           </div>
       </div>
       <div class="box-body">
           <div class="row">
               <div class="form-group col-md-2">
                   <label class="control-label">Código</label>
                   <div>{{ $animal->id }}</div>
               </div>
           <div class="form-group col-md-2">
                   <label class="control-label">Numero</label>
                   <div>{{ $animal->animal_numero }}</div>
             </div>
           </div>
           <div class="row">
               <div class="form-group col-md-2">
                   <label class="control-label">Nombre</label>
                   <div>{{ $animal->animal_nombre }}</div>
                   </div>
           <div class="form-group col-md-2">
                   <label class="control-label">Especie</label>
                   <div>{{ $animal->especie_nombre }}</div>
                   </div>
           </div>
           <div class="row">
               <div class="form-group col-md-2">
                   <label class="control-label">Raza</label>
                   <div>{{ $animal->raza_nombre }}</div>
                   </div>
                   <div class="form-group col-md-2">
                   <label class="control-label">Lote</label>
                   <div>{{ $animal->lote_nombre }}</div>
             </div>
           </div>
           <div class="row">
               <div class="form-group col-md-2">
                   <label class="control-label">Activo</label>
                   <div>{{ $animal->animal_activo }}</div>
                   </div>
                   <div class="form-group col-md-2">
                   <label class="control-label">Pedigree</label>
                   <div>{{ $animal->animal_pedigree }}</div>
             </div>
           </div>
           <div class="row">
                <div class="form-group col-md-2">
                   <label class="control-label">Observaciones</label>
                   <div>{{ $animal->animal_observaciones }}</div>
             </div>
             <div class="form-group col-md-2">
                   <label class="control-label"> Sexo </label>
            
              <div>
                  @if ( $animal->animal_macho == 0)
                     Macho
                     @else
                     Hembra
                     @endif
               </div>
                </div>
             </div>
           </div>
       </div>
   </div>
@stop