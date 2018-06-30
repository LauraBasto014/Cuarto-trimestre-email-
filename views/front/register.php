<?php include ('templates/head.php'); ?>

	<div class="container spacing-top">
		<div class="row">

			<div class="col-12 bg-info">
				
				<fieldset>
					<center>
					<legend class="title-h1">Formulario de Registro</legend>
						<form name="register" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
							<p>
								<select name="genre" required>
									<option value="hombre">Hombre</option>
									<option value="mujer">Mujer</option>
									<option value="genero" selected>Genero</option>
								</select>
							</p>
							<p>
								<input type="text" name="nombre" placeholder="Nombre completo.." required>
							</p>
							<p>
								<input type="email" name="correo" placeholder="Correo electronico.." required>
							</p>
							<p>
										<input class="inputform" id="contras" type="password" name="password" placeholder="Contraseña.." id="password"
							pattern="^(?=.*\d)(?=.*[\u0021\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$"
							onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Debe contener entre 8 y 16 caracteres: 
							(Digitos, minúsculas, mayúsculas y símbolos)' : ''); if(this.checkValidity()) form.confirm_password.pattern = this.value;"
							required>
							</p>
							<p>
								<input class="inputform" id="confcontras" type="password" name="conf_pass" placeholder="Confirmar contraseña.." id="password"
							pattern="^(?=.*\d)(?=.*[\u0021\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$"
							onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Por favor, ingresa la misma contraseña de arriba' : '');"
							required>
							</p>
							<p>
								<input type="submit" name="btn-register" class="btn btn-light" value="Registrar usuario">
								<input type="reset" class="btn btn-light" value="Limpiar datos">
							</p>
						</form>
					</center>
					</fieldset>

			</div>

		</div>
	</div>

<?php include ('templates/foot.php'); ?>