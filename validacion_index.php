<?php 
if($_POST) {
    if (isset($_POST['usuario']) && isset($_POST['clave']) && !empty($_POST['usuario']) && !empty($_POST['clave'])) {
        $username = $_POST['usuario'];
        $password = $_POST['clave'];

        $conn= new mysqli('localhost','root','','prueba_b1');
        $sql = "SELECT *
        FROM tienda
        WHERE Usuario_Tienda='$username'
        AND Clave_Tienda='$password'";

        $res = $conn->query($sql);

        if ($conn->error) {
            redirect('index.php?error_message=Ocurrió un error: ' . $conn->error);
        }

        if($res->num_rows > 0) {
                while ($row = $res->fetch_assoc()) {
                    $_SESSION['user'] = [
                        '$username' => $row['Usuario_Tienda'],
                        '$password' => $row['Clave_Tienda']
                    ];

                    $NomUsuario = $row['Usuario_Tienda'];
                    $NomTienda = $row['Nombre_Tienda'];
                    $CodTienda = $row['Cod_Tienda'];

                    header("Location: inicio.php?nom=$NomUsuario&tien=$NomTienda&id=$CodTienda");
                }
        } else {
            header('location: index.php?error_message=Usuario o clave incorrectos!');
        }


    } else {
        redirect('index.php?error_message=Ingrese todos los datos!');
    }
} else {
    redirect('index.php');
}




