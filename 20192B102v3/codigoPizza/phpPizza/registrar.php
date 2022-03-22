<!-- 	Recibe los valores del formulario ingreso y comprueba no esten vacios -->
					<?php
						if(isset($_POST['registrar'])) 
						{
							$nombre = $_POST['nombre'];
							$apellido = $_POST['apellido'];
							$correo = $_POST['correo'];
							$telefono = $_POST['telefono'];
							 $contraseña = $_POST['contraseña'];
							 $confirmarContraseña = $_POST['confirmarContraseña'];
							if ($_POST["contraseña"] === $_POST["confirmarContraseña"]) 
							{
					

 								  // caucho
							}
							else 
							{
								  echo "<script> alert('Las contraseñas no son iguales'); </script>";
							}
						}		

					?>