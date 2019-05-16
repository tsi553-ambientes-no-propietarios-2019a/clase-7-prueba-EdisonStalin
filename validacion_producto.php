
<?php
session_start();
if($_SERVER['SCRIPT_NAME'] == 'nuevo_producto.php' && !isset($_SESSION['user'])){
    header('Location: index.php');
   // exit(); 
}

if($_GET){
    $cod = $_GET['$CodTienda'];
}



if($_POST){
    if(isset($_POST['codigo']) && isset($_POST['nombre']) && isset($_POST['tipo']) && isset($_POST['stock'])  && isset($_POST['precio'])){

        $cod=$_POST['codigo'];
        $name=$_POST['nombre'];
        $tip=$_POST['tipo'];
        $stock=$_POST['stock'];
        $precio=$_POST['precio'];
       

        $conn = new mysqli('localhost', 'root', '', 'prueba_b1');
        $sql_insert = "INSERT INTO productos
        (Id_producto, Cod_Producto, Nombre_Producto, Tipo_Producto, Stock_Producto, Precio_Producto,fk_idTienda)
        VALUES (null,'$cod', '$name', '$tip', $stock, $precio, $cod)";
        $conn->query($sql_insert);  
    }else{
        echo 'llene todos los campos'; 
    }
    }

?>

