<?php
    include ('../conexion/conexion.php');
    

    $id = $_POST['id'];
    $texto1 = $_POST['ntexto1'];
    $subtexto1 = $_POST['nsubtexto1'];
    $textboton = $_POST['ntextboton'];



    $nimagen =$_FILES['nimagen']['name'];
    $xnimagen1 =$_POST['xnimagen'];

    if ($nimagen==""){

        $destino5 =$xnimagen1;
    
    } else {
    
        $nombrer = strtolower($nimagen);
        $cd=$_FILES['nimagen']['tmp_name'];
        $ruta = "imagenes/".$_FILES['nimagen']['name'];
        $destino5 = "imagenes/".$nombrer;
        $resultado1 = @move_uploaded_file($_FILES["nimagen"]["tmp_name"], $ruta);
       
    }




    //modificar
    $modificar = "UPDATE slides SET texto1='$texto1', subtexto1='$subtexto1', boton='$textboton', imagen='$destino5' WHERE id = '$id'";


    $resultado = mysqli_query($conexion, $modificar);

    

    if ($resultado) {
        echo "<script>
        alert('Se actualizo'); 
        window.location='../editslider.php';
        </script>";
    }else {
        echo "<script>
        alert('No se actualizo'); 
        window.history.go(-1);
        </script>";
    }
?>