<?php
if ($_POST) {
    if ( isset($_POST['codigo']) && isset($_POST['nombre']) && isset($_POST['tipo']) && isset($_POST['stock'])  && isset($_POST['precio'])){


        $cod=$_POST['codigo'];
        $name=$_POST['nombre'];
        $tip=$_POST['tipo'];
        $stock=$_POST['stock'];
        $precio=$_POST['precio'];


        $conn= new mysqli('localhost','root','','pruebab1');
        if ($conn->connect_error) {
            echo 'Error en la conexion '. $conn->connect_error;
        }
        
         $sql_insert="INSERT INTO producto values('$cod','$name','$tip','$stock','$precio');";
        
        
        $conn->query($sql_insert);
        if($conn->error){
            echo 'Ocurrio un error ----> '.$conn->error;

        }else {
            header('Location: inicio.php?succeed_message=Usuario registrado!');
        }
        
    }else {
        header('Location: nuevo_producto.php?error_message=Ingrese todos los datos!');
    }
}

