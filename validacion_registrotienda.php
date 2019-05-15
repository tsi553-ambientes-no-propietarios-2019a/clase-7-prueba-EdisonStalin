
<?php
if ($_POST) {
    if (isset($_POST['nombretienda']) && isset($_POST['usuario']) && isset($_POST['clave']) && isset($_POST['repetirclave']) 
    	&& ($_POST['clave'] == $_POST['repetirclave'])      ) {


        $nombtienda=$_POST['nombretienda'];
        $user=$_POST['usuario'];
        $pass=$_POST['clave'];
        $repetpass=$_POST['repetirclave'];

        $conn= new mysqli('localhost','root','','pruebab1');
        if ($conn->connect_error) {
            echo 'Error en la conexion '. $conn->connect_error;
        }
        
        $sql_insert="INSERT INTO tienda values('$nombtienda','$user','$pass','$repetpass');";
        
        $conn->query($sql_insert);
        if($conn->error){
            echo 'Ocurrio un error ----> '.$conn->error;

        }else {
            header('Location: index.php?succeed_message=Usuario registrado!');
        }
		
        
    }else {
    	//echo "validaciòn no exitosa!!!";
		header('Location: registro_tienda.php?error_message=Ingrese todos los datos!');
    }
}
?>
