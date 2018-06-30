<fieldset>
					<center><legend class="text-light">Mis Datos </legend></center>
						<?php

							if(isset($_SESSION['email'])){ $email = $_SESSION['email'];}
							if(isset($_SESSION['usuario'])){ $nombre = $_SESSION['usuario'];}
							if(isset($_SESSION['genero'])){ $genero = $_SESSION['genero'];}

						?>
							
					<center>
						<form name="" method="" action="">
							<p>
								<label class="title-h1">Nombre: </label>
								<input type="text" value="<?php echo $nombre; ?>" readonly>
							</p>
							<p>
								<label class="title-h1">Genero: </label>
								<input type="text" value="<?php echo $genero; ?>" readonly>
							</p>
							<p>
								<label class="title-h1">Correo: </label>
								<input type="email" value="<?php echo $email; ?>" readonly>
							</p>
						</form>
					</center>
					</fieldset>