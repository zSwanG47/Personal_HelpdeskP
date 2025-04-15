<div id="modalmantenimiento" class="modal fade bd-example-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
					<i class="font-icon-close-2"></i>
				</button>
				<h4 class="modal-title" id="mdltitulo"></h4>
			</div>
			<form method="post" id="usuario_form">
				<div class="modal-body">
					<input type="hidden" id="persona_id" name="persona_id">
                    <!-- TODO:PENDIENTE -->
                    <div class="form-group">
						<label class="form-label" for="persona_id">ID</label>
						<input type="text" class="form-control" id="persona_id" name="persona_id" placeholder="Ingrese Nombre" required>
					</div>

					<div class="form-group">
						<label class="form-label" for="nombres">Nombre</label>
						<input type="text" class="form-control" id="nombres" name="nombres" placeholder="Ingrese Nombre" required>
					</div>

					<div class="form-group">
						<label class="form-label" for="apellidos">Apellido</label>
						<input type="text" class="form-control" id="Apellido" name="Apellido" placeholder="Ingrese Apellido" required>
					</div>

					<div class="form-group">
						<label class="form-label" for="correo">Correo Electronico</label>
						<input type="email" class="form-control" id="correo" name="correo" placeholder="example@example.com" required>
					</div>

					<div class="form-group">
						<label class="form-label" for="usu_pass">Contraseña</label>
						<input type="text" class="form-control" id="usu_pass" name="usu_pass" placeholder="**************" required>
					</div>

					<div class="form-group">
						<label class="form-label" for="rol_id">Rol</label>
						<select class="select2" id="rol_id" name="rol_id">
							<option value="1">Usuario</option>
							<option value="2">Soporte</option>
						</select>
					</div>

					<div class="form-group">
						<label class="form-label" for="usu_telf">Telefono</label>
						<input type="text" class="form-control" id="usu_telf" name="usu_telf" placeholder="Ingrese Telefono" required>
					</div>
				
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-rounded btn-default" data-dismiss="modal">Cerrar</button>
					<button type="submit" name="action" id="" value="add" class="btn btn-rounded btn-primary">Guardar</button>
				</div>
			</form>
		</div>
	</div>
</div>