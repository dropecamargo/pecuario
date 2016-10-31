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
		<div class="form-group col-md-3">
			<label for="hato_color" class="control-label">Color</label>
			<input type="text" id="hato_color" name="hato_color" value="<%- hato_color %>" placeholder="Color" class="form-control input-sm input-toupper" maxlength="20" required>
		</div>
    </div>

	<div class="row">
		<div class="form-group col-md-12">
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
		<div class="form-group col-md-3">
			<label for="lote_color" class="control-label">Color</label>
			<input type="text" id="lote_color" name="lote_color" value="<%- lote_color %>" placeholder="Centro" class="form-control input-sm input-toupper" maxlength="20" required>
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
			<select name="lote_hato" id="lote_hato" class="form-control select2-default" required>
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
       <div class="form-group col-md-3">
			<label for="animal_numero" class="control-label">Numero</label>
			<input type="text" id="animal_numero" name="animal_numero" value="<%- animal_numero %>" placeholder="Numero" class="form-control input-sm input-toupper" maxlength="20" required>
		</div>
		<div class="form-group col-md-7">
			<label for="animal_nombre" class="control-label">Nombre</label>
			<input type="text" id="animal_nombre" name="animal_nombre" value="<%- animal_nombre %>" placeholder="Nombre" class="form-control input-sm input-toupper" maxlength="200" required>
		</div>
		<div class="form-group col-md-7">
			<label for="animal_rdfi" class="control-label">RDFI</label>
			<input type="text" id="animal_rdfi" name="animal_rdfi" value="<%- animal_rdfi %>" placeholder="RDFI" class="form-control input-sm input-toupper" maxlength="200" required>
		</div>
		<div class="form-group col-md-7">
			<label for="animal_observaciones" class="control-label">Observaciones</label>
			<input type="text" id="animal_observaciones" name="animal_observaciones" value="<%- animal_observaciones %>" placeholder="Observaciones" class="form-control input-sm input-toupper" maxlength="200" required>
		</div>
		 
    </div>

	<div class="row">
		<div class="form-group col-md-3 col-xs-10">
			<label for="animal_especie" class="control-label">Especie</label>
			<select name="animal_especie" id="animal_especie" class="form-control select2-default" required>
				@foreach( App\Models\Especies::getEspecies() as $key => $value)
					<option value="{{ $key }}"<%- animal_especie == '{{ $key }}' ? 'selected': ''%>>{{ $value }}</option>
				@endforeach
			</select>
		</div>
            <div class="form-group col-md-3 col-xs-10">
			<label for="animal_raza" class="control-label">Raza</label>
			<select name="animal_raza" id="animal_raza" class="form-control select2-default" required>
				@foreach( App\Models\Razas::getRazas() as $key => $value)
					<option value="{{ $key }}" <%- animal_raza == '{{ $key }}' ? 'selected': ''%>>{{ $value }}</option>
				@endforeach
			</select>
		</div>
		 <div class="form-group col-md-3 col-xs-10">
			<label for="animal_lote" class="control-label">Lote</label>
			<select name="animal_lote" id="animal_lote" class="form-control select2-default" required>
				@foreach( App\Models\Lote::getLotes() as $key => $value)
					<option value="{{ $key }}" <%- animal_lote == '{{ $key }}' ? 'selected': ''%>>{{ $value }}</option>
				@endforeach
			</select>
		</div>
        <div class="form-group col-sm-2">
            <label for="animal_nacimiento" class="col-sm-1 control-label">Fecha</label>
                <input type="text" id="animal_nacimiento" name="animal_nacimiento" placeholder="Fecha" value="<%- animal_nacimiento %>" class="form-control input-sm datepicker" required>
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
		<div class="form-group col-md-3">
			<label for="animal_peso_nacido" class="control-label">Peso nacido</label>
			<input type="text" id="animal_peso_nacido" name="animal_peso_nacido" value="<%- animal_peso_nacido %>" placeholder="Peso nacido" class="form-control input-sm input-toupper" maxlength="200">
		</div>
		<div class="form-group col-md-3">
			<label for="animal_indice_corporal" class="control-label">Peso indice corporal</label>
			<input type="text" id="animal_indice_corporal" name="animal_indice_corporal" value="<%- animal_indice_corporal %>" placeholder="Peso indice corporal" class="form-control input-sm input-toupper" maxlength="200">
		</div>
    </div>
    <div class="row">
		<div class="form-group col-md-2 col-xs-8 col-sm-3">
			<br><label class="checkbox-inline" for="animal_macho">
				<input type="checkbox" id="animal_macho" name="animal_macho" value="animal_macho" <%- animal_macho ? 'checked': ''%>> Macho
			</label>
		</div>
		<div class="form-group col-md-2 col-xs-8 col-sm-3">
			<br><label class="checkbox-inline" for="animal_activo">
				<input type="checkbox" id="animal_activo" name="animal_activo" value="animal_activo" <%- animal_activo ? 'checked': ''%>> Activo
			</label>
		</div>
		<div class="form-group">
              <label class="col-md-4 control-label">Nuevo Archivo</label>
              <div class="col-md-6">
              <input type="file" class="form-control" name="animal_foto" id="animal_foto" >
            </div>
        </div>
    </div>



</script>
