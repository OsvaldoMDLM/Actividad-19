<?php
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    session_start();
    $_SESSION['nombre'] =$nombre;

    require_once "db.php";
	$conexion=conexion();

    $consulta =  "SELECT * FROM usuarios WHERE nombre='$nombre' and correo='$correo' ";
    $resultado = mysqli_query($conexion,$consulta);

    $filas = mysqli_num_rows($resultado);
    if($filas){
        header("location:mostrar.php");
    }
    else {
        include("NoExiste.php");
    }


    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>