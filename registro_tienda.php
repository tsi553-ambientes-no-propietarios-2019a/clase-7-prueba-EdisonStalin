
<!DOCTYPE html>
<html>
<head>
	<title>Prueba1</title>
	<center><h1>Registro de Tienda</h1> </center>
	
</head>
<body>

<form method="post" action="validacion_registrotienda.php">
	
						
						<div>
							<label><i> <b> Nombre de la Tienda: </i> </b></label>

							<input type="text" id="userid" name="nombretienda" required="required" placeholder="Ingrese Nombre de la Tienda" >

						</div>
						<br> 
						<div>
							<label><i> <b> Usuario: </i> </b></label>

							<input type="text" id="userid" name="usuario" required="required" placeholder="Ingrese Usuario" >

						</div>
						<br> 
						<div>
							<label> <i> <b> Clave: </i> </b></label> 
							<input type="password" name="clave" required="required" placeholder="Ingrese Contraseña">
						</div>
						<br>
						<div>
							<label> <i> <b> Repetir Clave: </i> </b></label> 
							<input type="password" name="repetirclave" required="required" placeholder="Repetir Contraseña">
						</div>

						<br>
						<button type="submit" class="btn btn-primary"> Registrar! </button>

						

					

	
</form>


</body>
</html>
