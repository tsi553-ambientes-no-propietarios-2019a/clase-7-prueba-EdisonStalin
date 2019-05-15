
<?php
if ($_POST) {
    if (isset($_POST['usuarioindex']) && isset($_POST['claveindex']) ) {


        
        $user=$_POST['usuarioindex'];
        $pass=$_POST['claveindex'];
        
        

        $conn= new mysqli('localhost','root','','pruebab1');
        if ($conn->connect_error) {
            echo 'Error en la conexion '. $conn->connect_error;
        }
        
        $sql_insert="select Usuario,Clave from tienda
						where Usuario = '$user' and Clave = '$pass';";
        
        $conn->query($sql_insert);
        if($conn->error){
            echo 'Ocurrio un error ----> '.$conn->error;

        }else {
            header('Location: inicio.php?succeed_message=validaciòn  exitosa!!!!');
        }
        
        
    }else {
        
        header('Location: index.php?error_message=validaciòn no exitosa!!!!');
    }
}
?>



</html>
