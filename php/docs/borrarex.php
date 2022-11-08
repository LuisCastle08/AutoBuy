<?php
    include ('conexion/conexion.php');
    $id = $_GET["id"];

    $borrar = "DELETE FROM autos WHERE id='$id'";

    $resultado = mysqli_query($conexion, $borrar);

    if ($resultado) {
        header("location: borrar.php");
    }else{
        echo "<script>
        alert('No se pudo eliminar'); 
        window.history.go(-1);
        </script>";
    }
?>