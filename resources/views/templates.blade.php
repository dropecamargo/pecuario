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