<?php

    function conexion(){

        $host="localhost";
        $user="root";
        $password="";
        $db="actividad18";
    
        $conexion = mysqli_connect($host,$user,$password,$db);
        if(!$conexion)
        {
            die("no hay conexion".mysqli_connect_error());
        }


        return $conexion;

        mysqli_close($conexion);
    }
?>