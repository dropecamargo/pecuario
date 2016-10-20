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