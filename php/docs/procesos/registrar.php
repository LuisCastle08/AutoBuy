<?php

    //variables

    //registro
    $modelo = $_POST['modelo'];
    $kilometros = $_POST['kilometros'];
    $ciudad = $_POST['ciudad'];
    $tipodepago = $_POST['tipodepago'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    //fichatecnica
    $combustible = $_POST['combustible'];
    $cilindros = $_POST['cilindros'];
    $valvulas = $_POST['valvulas'];
    $alimentacion = $_POST['alimentacion'];
    $aceleracion = $_POST['aceleracion'];
    $velocidad = $_POST['velocidad'];
    $traccion = $_POST['traccion'];
    $transmision = $_POST['transmision'];
    $frenos = $_POST['frenos'];
    $neumaticos = $_POST['neumaticos'];
    $largo = $_POST['largo'];
    $ancho = $_POST['ancho'];
    $alto = $_POST['alto'];
    $tanque = $_POST['tanque'];
    
   
    
   



    //conexionaDB
    include('../conexion/conexion.php');

    $nombre = $_FILES['imguno']['name'];
    $nombrer = strtolower($nombre);
    $cd=$_FILES['imguno']['tmp_name'];
    $ruta = "imagenes/".$_FILES['imguno']['name'];
    $destino1 = "imagenes/".$nombrer;
    $resultado = @move_uploaded_file($_FILES["imguno"]["tmp_name"], $ruta);

    $nombre = $_FILES['imgdos']['name'];
    $nombrer = strtolower($nombre);
    $cd=$_FILES['imgdos']['tmp_name'];
    $ruta = "imagenes/".$_FILES['imgdos']['name'];
    $destino2 = "imagenes/".$nombrer;
    $resultado = @move_uploaded_file($_FILES["imgdos"]["tmp_name"], $ruta);

    $nombre = $_FILES['imgtres']['name'];
    $nombrer = strtolower($nombre);
    $cd=$_FILES['imgtres']['tmp_name'];
    $ruta = "imagenes/".$_FILES['imgtres']['name'];
    $destino3 = "imagenes/".$nombrer;
    $resultado = @move_uploaded_file($_FILES["imgtres"]["tmp_name"], $ruta);

    
    
    if (!empty($modelo)) {
        $query = "INSERT INTO autos (modelo, kilometros, ciudad, tipodepago, descripcion, precio, combustible, cilindros,valvulas, alimentacion, aceleracion, velocidad, traccion, transmision, frenos, neumaticos, largo, ancho, alto, tanque,imguno,imgdos,imgtres ) VALUES ('".$modelo."', '".$kilometros."',  '".$ciudad."',  '".$tipodepago."',  '".$descripcion."',  '".$precio."',  '".$combustible."', '".$cilindros."', '".$valvulas."', '".$alimentacion."', '".$aceleracion."', '".$velocidad."', '".$traccion."', '".$transmision."', '".$frenos."', '".$neumaticos."', '".$largo."', '".$ancho."', '".$alto."', '".$tanque."', '".$destino1."', '".$destino2."', '".$destino3."')";
    
        $ejecutar = mysqli_query($conexion, $query);

        ?>
        <script>
                window.location="../index.php";
        </script>
        <?php
    }else{
       header("location:../index.php");
    }
    
	
?>