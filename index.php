<?php 
//Encabezado de la pagina
include ('views/front/templates/head.php');

//validar errores
if(isset($_GET['error'])){

	include ('views/errors/errors.php');
}

?>

<div class="container spacing-top">
	<div class="row">
		<div class="col-6 bg-light">

			<center>
				<h1 class="text-info">MAIL</h1>
				<figure>
					<img src="http://localhost/webmail/public/images/email.png" class="img-email">
				</figure>
			</center>

		</div>
		<div class="col-6 bg-info">
			<fieldset>
					<legend class="text-light">Formulario de Registro</legend>
						<form name="register" method="post" action="app/Http/Controllers/Controller.php">
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
							<input class="inputform" id="contras" type="password" name="password" placeholder="Contraseña.." id="password"
							pattern="^(?=.*\d)(?=.*[\u0021\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$"
							onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Debe contener entre 8 y 16 caracteres: 
							(Digitos, minúsculas, mayúsculas y símbolos)' : ''); if(this.checkValidity()) form.confirm_password.pattern = this.value;"
							required>
							<p>
								<br>
							<input class="inputform" id="confcontras" type="password" name="conf_pass" placeholder="Confirmar contraseña.." id="password"
							pattern="^(?=.*\d)(?=.*[\u0021\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$"
							onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Por favor, ingresa la misma contraseña de arriba' : '');"
							required>
							</p>
							<p>
								<input type="submit" name="btn-register" class="btn btn-light" value="Registrar usuario">
								<input type="reset" class="btn btn-light"value="Limpiar datos">
							</p>
						</form>
			</fieldset>
			<p><a href="http://localhost/webmail/views/front/login.php" class="registrado text-dark">Ya estoy registrado!</a></p>
		</div>
		</div>
	</div>
</div>

<?php include ('views/front/templates/foot.php'); ?>