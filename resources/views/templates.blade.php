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
		<div class="form-group col-md-7">
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
		<div class="form-group col-md-2 col-xs-8 col-sm-3">
			<br><label class="checkbox-inline" for="lote_activo">
				<input type="checkbox" id="lote_activo" name="lote_activo" value="lote_activo" <%- lote_activo ? 'checked': ''%>> Activo
			</label>
		</div>

		<div class="form-group col-md-2 col-xs-8 col-sm-3">
			<br><label class="checkbox-inline" for="lote_alerta_sin_pesaje">
				<input type="checkbox" id="lote_alerta_sin_pesaje" name="lote_alerta_sin_pesaje" value="lote_alerta_sin_pesaje" <%- lote_alerta_sin_pesaje ? 'checked': ''%>> Lote Alerta Sin Pesaje
			</label>
		</div>
    </div>
    <div class="row">
		<div class="form-group col-md-12">
			<label for="lote_superficie" class="control-label">Superficie</label>
			<input type="text" id="lote_superficie" name="lote_superficie" value="<%- lote_superficie %>" placeholder="Superficie" class="form-control input-sm input-toupper" maxlength="200">
		</div>
    </div>

      <div class="row">
    <div class="form-group col-md-6 col-xs-10">
			<label for="lote_hato" class="control-label">Hato</label>
			<select name="lote_hato" id="lote_hato" class="form-control select2-default" required>
				@foreach( App\Models\Hato::getHatos() as $key => $value)
					<option value="{{ $key }}">{{ $value }}</option>
				@endforeach
			</select>
		</div>
		</div>
   
    <div class="row">
		<div class="form-group col-md-12">
			<label for="lote_alerta_peso_inferior" class="control-label">Lote alerta peso inferior</label>
			<input type="text" id="lote_alerta_peso_inferior" name="lote_alerta_peso_inferior" value="<%- lote_alerta_peso_inferior %>" placeholder="Lote alerta peso inferior" class="form-control input-sm input-toupper" maxlength="200">
		</div>
    </div>
    <div class="row">
		<div class="form-group col-md-12">
			<label for="lote_alerta_peso_superior" class="control-label">Lote alerta peso superior</label>
			<input type="text" id="lote_alerta_peso_superior" name="lote_alerta_peso_superior" value="<%- lote_alerta_peso_superior %>" placeholder="Lote alerta peso superior" class="form-control input-sm input-toupper" maxlength="200">
		</div>
    </div>
    
</div>
</script>

