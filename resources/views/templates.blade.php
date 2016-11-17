{{-- JStemplates --}}
<script type="text/template" id="add-especie-tpl">
    <div class="row">
		<div class="form-group col-md-7">
			<label for="especie_nombre" class="control-label">Nombre</label>
			<input type="text" id="especie_nombre" name="especie_nombre" value="<%- especie_nombre %>" placeholder="Nombre" class="form-control input-sm input-toupper" maxlength="200" required>
		</div>
    </div>

	<div class="row">
		<div class="form-group col-md-2 col-xs-8 col-sm-3">
			<br><label class="checkbox-inline" for="especie_activa">
				<input type="checkbox" id="especie_activa" name="especie_activa" value="especie_activa" <%- especie_activa ? 'checked': ''%>> Activa
			</label>
		</div>
    </div>
</script>

<script type="text/template" id="add-raza-tpl">
    <div class="row">
		<div class="form-group col-md-7">
			<label for="raza_nombre" class="control-label">Nombre</label>
			<input type="text" id="raza_nombre" name="raza_nombre" value="<%- raza_nombre %>" placeholder="Nombre" class="form-control input-sm input-toupper" maxlength="200" required>
		</div>
    </div>

	<div class="row">
		<div class="form-group col-md-2 col-xs-8 col-sm-3">
			<br><label class="checkbox-inline" for="raza_activa">
				<input type="checkbox" id="raza_activa" name="raza_activa" value="raza_activa" <%- raza_activa ? 'checked': ''%>> Activa
			</label>
		</div>
    </div>
</script>

<script type="text/template" id="add-hato-tpl">
    <div class="row">
		<div class="form-group col-md-7">
			<label for="hato_nombre" class="control-label">Nombre</label>
			<input type="text" id="hato_nombre" name="hato_nombre" value="<%- hato_nombre %>" placeholder="Nombre" class="form-control input-sm input-toupper" maxlength="200" required>
		</div>
		
    </div>

	<div class="row">
		<div class="form-group col-md-7">
			<label for="hato_descripcion" class="control-label">Descripcion</label>
			<input type="text" id="hato_descripcion" name="hato_descripcion" value="<%- hato_descripcion %>" placeholder="Descripcion" class="form-control input-sm input-toupper" maxlength="200">
		</div>
    </div>

	<div class="row">
		<div class="form-group col-md-2 col-xs-8 col-sm-3">
			<br><label class="checkbox-inline" for="hato_activo">
				<input type="checkbox" id="hato_activo" name="hato_activo" value="hato_activo" <%- hato_activo ? 'checked': ''%>> Activo
			</label>
		</div>
    </div>
</script>

<script type="text/template" id="add-lote-tpl">
        <div class="row">
		<div class="form-group col-md-3">
			<label for="lote_nombre" class="control-label">Nombre</label>
			<input type="text" id="lote_nombre" name="lote_nombre" value="<%- lote_nombre %>" placeholder="Nombre" class="form-control input-sm input-toupper" maxlength="200" required>
		</div>
		
    </div>

	<div class="row">
		<div class="form-group col-md-12">
			<label for="lote_descripcion" class="control-label">Descripcion</label>
			<input type="text" id="lote_descripcion" name="lote_descripcion" value="<%- lote_descripcion %>" placeholder="Descripcion" class="form-control input-sm input-toupper" maxlength="200">
		</div>
    </div>

	    <div class="row">
	    <div class="form-group col-md-3">
			<label for="lote_superficie" class="control-label">Superficie</label>
			<input type="text" id="lote_superficie" name="lote_superficie" value="<%- lote_superficie %>" placeholder="Superficie" class="form-control input-sm input-toupper" maxlength="200">
		</div>
		<div class="form-group col-md-3">
			<label for="lote_alerta_sin_pesaje" class="control-label">Lote alerta sin pesaje</label>
			<input type="text" id="lote_alerta_sin_pesaje" name="lote_alerta_sin_pesaje" value="<%- lote_alerta_sin_pesaje %>" placeholder="Lote alerta sin pesaje" class="form-control input-sm input-toupper" maxlength="200">
		</div>
    </div>
    <div class="row">
		<div class="form-group col-md-3">
			<label for="lote_alerta_peso_inferior" class="control-label">Lote alerta peso inferior</label>
			<input type="text" id="lote_alerta_peso_inferior" name="lote_alerta_peso_inferior" value="<%- lote_alerta_peso_inferior %>" placeholder="Lote alerta peso inferior" class="form-control input-sm input-toupper" maxlength="200">
		</div>
		<div class="form-group col-md-3">
			<label for="lote_alerta_peso_superior" class="control-label">Lote alerta peso superior</label>
			<input type="text" id="lote_alerta_peso_superior" name="lote_alerta_peso_superior" value="<%- lote_alerta_peso_superior %>" placeholder="Lote alerta peso superior" class="form-control input-sm input-toupper" maxlength="200">
		</div>
    </div>
    
    
</div>

      <div class="row">
    <div class="form-group col-md-3 col-xs-10">
			<label for="lote_hato" class="control-label">Hato</label>
			<select name="lote_hato" id="lote_hato" class="form-control select2-default" >
				@foreach( App\Models\Hato::getHatos() as $key => $value)
					<option value="{{ $key }}" <%- lote_hato == '{{ $key }}' ? 'selected': ''%>>{{ $value }}</option>
				@endforeach
			</select>
		</div>

		<div class="form-group col-md-1 col-xs-2 text-right">
			<div>&nbsp;</div>
			<button type="button" class="btn btn-default btn-flat btn-sm btn-add-resource-koi-component" data-resource="hato" data-field="lote_hato">
				<i class="fa fa-plus"></i>
			</button>
		</div>

		<div class="form-group col-md-3">
			<br><label class="checkbox-inline" for="lote_activo">
				<input type="checkbox" id="lote_activo" name="lote_activo" value="lote_activo" <%- lote_activo ? 'checked': ''%>> Activo
			</label>
		</div>

		</div>
</script>

<script type="text/template" id="add-animal-tpl">
    <div class="row">
       <div class="form-group col-md-1">
			<label for="animal_numero" class="control-label">Numero</label>

			<input type="text" id="animal_numero" name="animal_numero" value="<%- animal_numero %>" placeholder="Numero" class="form-control input-sm input-toupper" maxlength="20" >

             
		</div>
		<div class="form-group col-md-1">
			<label for="animal_rdfi" class="control-label">RDFI</label>
			<input type="text" id="animal_rdfi" name="animal_rdfi" value="<%- animal_rdfi %>" placeholder="RDFI" class="form-control input-sm input-toupper" maxlength="200" >
		</div>
		<div class="form-group col-md-3">
			<label for="animal_nombre" class="control-label">Nombre</label>
			<input type="text" id="animal_nombre" name="animal_nombre" value="<%- animal_nombre %>" placeholder="Nombre" class="form-control input-sm input-toupper" maxlength="200" required>
		</div>
		 <div class="form-group col-md-2 col-xs-3 col-sm-3">
			<br><label class="checkbox-inline" for="animal_activo">
				<input type="checkbox" id="animal_activo" name="animal_activo" value="animal_activo" <%- animal_activo ? 'checked': ''%>> Activo
			</label>
		</div>
		
		
		<div class="form-group col-md-1 col-xs-2 text-right">
			  <div>&nbsp;</div>
			  <button type="button" class="btn btn-success btn-flat btn-sm btn-add-resource-koi-component" data-resource="sanidad" data-field="animal_sanidad">Sanidad
				<i class="fa fa-plus"></i>
		</button>
		</div>
		</div>
		</div>
		<div class="row">
		<div class="form-group col-md-7">
			<label for="animal_observaciones" class="control-label">Observaciones</label>
			<input type="text" id="animal_observaciones" name="animal_observaciones" value="<%- animal_observaciones %>" placeholder="Observaciones" class="form-control input-sm input-toupper" maxlength="200" >
		</div>

		<div class="form-group col-md-1 col-xs-2 text-right">
			  <div>&nbsp;</div>
			  <button type="button" class="btn btn-success btn-flat btn-sm btn-add-resource-koi-component" data-resource="Peso" data-field="animal_peso">Peso
				<i class="fa fa-plus"></i>
		</button>
		</div>
		</div>
		<div class="row">
		 <div class="form-group col-sm-2">
            <label for="animal_nacimiento" class="col-sm-1 control-label">Fecha Nacimiento</label>
                <input type="text" id="animal_nacimiento" name="animal_nacimiento" placeholder="Fecha Nacimiento" value="<%- animal_nacimiento %>" class="form-control input-sm datepicker" >
        </div>
        <div class="form-group col-sm-2">
            <label for="animal_destete" class="col-sm-1 control-label">Fecha Destete</label>
                <input type="text" id="animal_destete" name="animal_destete" placeholder="Fecha Destete" value="<%- animal_destete %>" class="form-control input-sm datepicker" >
        </div>
        <div class="form-group col-sm-2">
            <label for="animal_ingreso" class="col-sm-1 control-label">Fecha Ingreso</label>
                <input type="text" id="animal_ingreso" name="animal_ingreso" placeholder="Fecha Ingreso" value="<%- animal_ingreso %>" class="form-control input-sm datepicker" >
        </div>
    </div>

	<div class="row">
	    <div class="caption">
		
		<div class="form-group col-md-2 col-xs-3">
			<label for="animal_especie" class="control-label">Especie</label>
			<select name="animal_especie" id="animal_especie" class="form-control select2-default" >
				@foreach( App\Models\Especies::getEspecies() as $key => $value)
					<option value="{{ $key }}"<%- animal_especie == '{{ $key }}' ? 'selected': ''%>>{{ $value }}</option>
				@endforeach
			</select>
			</div>
     
			<div class="form-group col-md-1 col-xs-1 text-right">
			   <div>&nbsp;</div>
			  <button type="button" class="btn btn-default btn-flat btn-sm btn-add-resource-koi-component" data-resource="especie" data-field="animal_especie">
				<i class="fa fa-plus"></i>
		</button>
		</div>
      </div>
	
	
	    <div class="caption">
		<div class="form-group col-md-2 col-xs-3">
			<label for="animal_raza" class="control-label">Raza</label>
			<select name="animal_raza" id="animal_raza" class="form-control select2-default" >
				@foreach( App\Models\Razas::getRazas() as $key => $value)
					<option value="{{ $key }}" <%- animal_raza == '{{ $key }}' ? 'selected': ''%>>{{ $value }}</option>
				@endforeach
				</select>
			</div>
    
				<div class="form-group col-md-1 col-xs-1 text-right">
			<div>&nbsp;</div>
			<button type="button" class="btn btn-default btn-flat btn-sm btn-add-resource-koi-component" data-resource="raza" data-field="animal_raza">
				<i class="fa fa-plus"></i>
			</button>
		</div>
		</div>
		


		<div class="caption">
		<div class="form-group col-md-2 col-xs-3">
			<label for="animal_lote" class="control-label">Lote</label>
			<select name="animal_lote" id="animal_lote" class="form-control select2-default" >
				@foreach( App\Models\Lote::getLotes() as $key => $value)
					<option value="{{ $key }}" <%- animal_lote == '{{ $key }}' ? 'selected': ''%>>{{ $value }}</option>
				@endforeach
			</select>
		</div>
     
				<div class="form-group col-md-1 col-xs-1 text-right">
			<div>&nbsp;</div>
			<button type="button" class="btn btn-default btn-flat btn-sm btn-add-resource-koi-component" data-resource="lote" data-field="animal_lote">
				<i class="fa fa-plus"></i>
			</button>
		</div>
		</div>
        </div>
    



    <div class="row">
		<div class="form-group col-md-3">
			<label for="animal_pedigree" class="control-label">Pedigree</label>
			<input type="text" id="animal_pedigree" name="animal_pedigree" value="<%- animal_pedigree %>" placeholder="Pedigree" class="form-control input-sm input-toupper" maxlength="200">
		</div>
		<div class="form-group col-md-3">
			<label for="animal_padre" class="control-label">Padre</label>
			<input type="text" id="animal_padre" name="animal_padre" value="<%- animal_padre %>" placeholder="Padre" class="form-control input-sm input-toupper" maxlength="200">
		</div>
		<div class="form-group col-md-3">
			<label for="animal_madre" class="control-label">Madre</label>
			<input type="text" id="animal_madre" name="animal_madre" value="<%- animal_madre %>" placeholder="Madre" class="form-control input-sm input-toupper" maxlength="200">
		</div>
		
		
    </div>
    <div class="row">
    <div class="form-group col-md-3">
			<label for="animal_peso_nacido" class="control-label">Peso nacido</label>
			<input type="text" id="animal_peso_nacido" name="animal_peso_nacido" value="<%- animal_peso_nacido %>" placeholder="Peso nacido" class="form-control input-sm input-toupper" maxlength="200">
		</div>
		<div class="form-group col-md-3">
			<label for="animal_indice_corporal" class="control-label">Peso indice corporal</label>
			<input type="text" id="animal_indice_corporal" name="animal_indice_corporal" value="<%- animal_indice_corporal %>" placeholder="Peso indice corporal" class="form-control input-sm input-toupper" maxlength="200">
		</div>

         <div class="form-group col-md-3">
         <label for="animal_macho" class="control-label">sexo</label>
         <select name="animal_macho" id="animal_macho" class="form-control select2-default" >
         <option value="0"> Macho </option>
         <option value="1"> Hembra </option>

        </div>     
      </div>
  </script>
<script type="text/template" id="add-actividad-tpl">
    <div class="row">
		<div class="form-group col-md-4">
			<label for="actividad_nombre" class="control-label">Nombre</label>
			<input type="text" id="actividad_nombre" name="actividad_nombre" value="<%- actividad_nombre %>" placeholder="Nombre" class="form-control input-sm input-toupper" maxlength="200" required>
		</div>
    </div>

	<div class="row">
		<div class="form-group col-md-2 col-xs-8 col-sm-3">
			<br><label class="checkbox-inline" for="actividad_activa">
				<input type="checkbox" id="actividad_activa" name="actividad_activa" value="actividad_activa" <%- actividad_activa ? 'checked': ''%>> Activa
			</label>
		</div>
    </div>
</script>

<script type="text/template" id="add-peso-tpl">
    <div class="row">
     <div class="form-group col-md-3 col-xs-3">

			<label for="peso_animal" class="control-label">Animal</label>
			<select name="peso_animal" id="peso_animal" " class="form-control select2-default" >
				@foreach( App\Models\Animal::getAnimalName() as $key => $value)
					<option value="{{ $key }}"<%- peso_animal == '{{ $key }}' ? 'selected': ''%>>{{ $value }}
                    
					</option>
				@endforeach

			</select>
		</div>


          
		
		


		 <div class="row">
          <div class="form-group col-md-2 col-xs-3">
		<label for="peso_lote" class="control-label">Lote de animal</label>

         <button class="btn btn-primary" type="button">
         Lote de animal
         <span class="badge"></span>
         </button>
        </div>
		</div>
		
         
		<div class="form-group col-md-2 col-xs-3">
			<label for="peso_lote" class="control-label">Cambio de Lote</label>
			<select name="peso_lote" id="peso_lote" class="form-control select2-default" >
				@foreach( App\Models\Lote::getLotes() as $key => $value)
					<option value="{{ $key }}"<%- peso_lote == '{{ $key }}' ? 'selected': ''%>>{{ $value }}</option>
				@endforeach
			</select>
	   </div>
	   
    
		<div class="form-group col-sm-2">
            <label for="peso_fecha" class="col-sm-1 control-label">Fecha</label>
                <input type="text" id="peso_fecha" name="peso_fecha" placeholder="Fecha Ingreso" value="<%- peso_fecha %>" class="form-control input-sm datepicker" >
        </div>
     </div>
     <div class="row">
		<div class="form-group col-md-6">
			<label for="peso_observaciones" class="control-label">Observaciones</label>
			<input type="text" id="peso_observaciones" name="peso_observaciones" value="<%- peso_observaciones %>" placeholder="Observaciones" class="form-control input-sm input-toupper" maxlength="200" >
		</div>
		</div>
 </script>
 <script type="text/template" id="add-sanidad-tpl">
    <div class="row">
           <div class="form-group col-md-3 col-xs-3">

			<label for="sanidad_actividad" class="control-label">Actividad</label>
			<select name="sanidad_actividad" id="sanidad_actividad" class="form-control select2-default" >
				@foreach( App\Models\Actividad::getActividad() as $key => $value)
					<option value="{{ $key }}"<%- sanidad_actividad == '{{ $key }}' ? 'selected': ''%>>{{ $value }}
                    
					</option>
				@endforeach

			</select>
		    </div>
          
             <div class="form-group col-md-2 col-xs-3">

			<label for="sanidad_animal" class="control-label">Numero Animal</label>
			<div class="form-group">
             <input type="text" id="sanidad_animal" name="sanidad_animal" class="form-control" value="<%- sanidad_animal %>" placeholder="Numero de animal">
           </div>
		</div>
		
		 <div class="form-group col-md-2 col-xs-3">
            <label for="sanidad_fecha" class="col-sm-1 control-label">Fecha</label>
                <input type="text" id="sanidad_fecha" name="sanidad_fecha" placeholder="Sanidad Fecha" value="<%- sanidad_fecha %>" class="form-control input-sm datepicker" >
        </div>
       </div>
        <div class="row">
		<div class="form-group col-md-7 ">
			<label for="sanidad_nombre" class="control-label">Nombre</label>
			<input type="text" id="sanidad_nombre" name="sanidad_nombre" value="<%- sanidad_nombre %>" placeholder="nombre" class="form-control input-sm input-toupper" maxlength="200" required>
		</div>
		</div>
       <div class="row">
		<div class="form-group col-md-7 ">
			<label for="sanidad_tratamiento" class="control-label">Tratamiento</label>
			<input type="text" id="sanidad_tratamiento" name="sanidad_tratamiento" value="<%- sanidad_tratamiento %>" placeholder="Tratamiento" class="form-control input-sm input-toupper" maxlength="200" >
		</div>
		</div>
		 <div class="row">
		<div class="form-group col-md-7 ">
			<label for="sanidad_comentario" class="control-label">Comentario</label>
			<input type="text" id="sanidad_comentario" name="sanidad_comentario" value="<%- sanidad_comentario %>" placeholder="comentario" class="form-control input-sm input-toupper" maxlength="200" >
		</div>
		</div>

        <div class="row">
		
		<div class="form-group col-md-7 ">
			<label for="sanidad_lote" class="control-label">Lote</label>
			<input type="text" id="sanidad_lote" name="sanidad_lote" value="<%- sanidad_lote %>" placeholder="Lote" class="form-control input-sm input-toupper" maxlength="200" >
		</div>
          </div>

		<div class="form-group col-md-2 col-xs-8 col-sm-3">
			<br><label class="checkbox-inline" for="sanidad_aplicalote">
				<input type="checkbox" id="sanidad_aplicalote" name="sanidad_aplicalote" value="sanidad_aplicalote" <%- sanidad_aplicalote ? 'checked': ''%>> Aplicar En Lote
			</label>
			
			</div>
        </div>
        <div class="row">
        <div class="form-group col-md-2 col-xs-3">
			<label for="sanidad_cambialote" class="control-label">Cambio De Lote</label>
			<select name="sanidad_cambialote" id="sanidad_cambialote" class="form-control select2-default" >
				@foreach( App\Models\Lote::getLotes() as $key => $value )
					<option value="{{ $key }}"<%- sanidad_cambialote == '{{ $key }}' ? 'selected': ''%>>{{ $value }}</option>
				@endforeach
			</select>
          </div>
         </div>
 </script>