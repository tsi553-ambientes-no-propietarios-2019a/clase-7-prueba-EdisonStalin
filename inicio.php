
<!DOCTYPE html>
<html>
<head>
	<title>Tiendas</title>
</head>
<body>


	<h1>Tienda: <b><?php echo $ti?></h1>
	<p>Bienvenido: <b><?php echo $nom?></b></p>

	<p>Productos de la tienda: </p>

	<table border ="1">
		<tr>
			<td>Id</td>
			<td>Codigo</td>
			<td>Nombre</td>
			<td>Tipo</td>
			<td>Stock</td>
			<td>Precio</td>
			<td>Id_Usuario</td>
		</tr>

		<?php
			$sql = "SELECT * FROM productos,tienda WHERE  fk_idTienda = $CodTienda";
			$result = mysqli_query($conn, $sql); 
			while($mostrar = mysqli_fetch_array($result)){
		?>




		<tr>
			<td><?php echo $mostrar['Id_producto']  ?></td>
			<td><?php echo $mostrar['Cod_Producto']  ?></td>
			<td><?php echo $mostrar['Nombre_Producto']  ?></td>
			<td><?php echo $mostrar['Tipo_Producto']  ?></td>
			<td><?php echo $mostrar['Stock_Producto']  ?></td>
			<td><?php echo $mostrar['Precio_Producto']  ?></td>
			<td><?php echo $mostrar['fk_idTienda']  ?></td>
		</tr>
		<?php
			}
		?>


	
	
	</table>

	<br>
	<?php
	echo "<a href='nuevo_producto.php?$CodTienda=CodTienda'>Registrar nuevo producto</a>"
	?>

	<a href = "Salir.php">Salir</a>

</body>
</html>