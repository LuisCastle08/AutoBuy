<?php
    $conexion = mysqli_connect("localhost", "root", "");
/*
    if(!$conexion) {
        echo "no se conecto";
    }else{
        echo "se conecto";
    }*/
    $consulta = mysqli_select_db($conexion, "automoviles");
?>