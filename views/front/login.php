<?php include ('templates/head.php'); ?>

	<div class="container spacing-top">
		<div class="row">

			<div class="col-12 bg-info">
				
				<fieldset>
					<center>
					<legend class="text-light">Formulario de Ingreso</legend>
						<form name="login" method="post" action="Controller.php">
							<p>
								<input type="email" name="correo_log" placeholder="Correo electronico.." required>
							</p>
							<p>
											<input class="inputform" id="contras" type="password" name="password" placeholder="Contraseña.." id="password"
			pattern="^(?=.*\d)(?=.*[\u0021\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$"
			onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Debe contener entre 8 y 16 caracteres: 
			(Digitos, minúsculas, mayúsculas y símbolos)' : ''); if(this.checkValidity()) form.confirm_password.pattern = this.value;"
			required>
							</p>
							<p>
								<!-- Envio de datos ocultos -->
								<input type="hidden" name="genre" value="<?php echo $genre; ?>">
								<input type="hidden" name="nombre" value="<?php echo $nombre; ?>">
								<input type="hidden" name="correo" value="<?php echo $correo; ?>">
								<input type="hidden" name="password" value="<?php echo $password; ?>">

								<input type="submit" name="btn-login" class="btn btn-light" value="Ingresar">
								<input type="reset" class="btn btn-light" value="Cancelar">
							</p>
						</form>
					</center>
					</fieldset>

			</div>

		</div>
	</div>

<?php include ('templates/foot.php'); ?>