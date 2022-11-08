<?php
    include ('../conexion/conexion.php');
    

    $id = $_POST['id'];
    $modelo = $_POST['nmodelo'];
    $kilometros = $_POST['nkilometros'];
    $ciudad = $_POST['nciudad'];
    $tipodepago = $_POST['ntipodepago'];
    $precio = $_POST['nprecio'];
    $descripcion = $_POST['ndescripcion'];


    //ficha
    $combustible = $_POST['ncombustible'];
    $cilindros = $_POST['ncilindros'];
    $valvulas = $_POST['nvalvulas'];
    $alimentacion = $_POST['nalimentacion'];
    $aceleracion = $_POST['naceleracion'];
    $velocidad = $_POST['nvelocidad'];

    $traccion = $_POST['ntraccion'];
    $transmision = $_POST['ntransmision'];
    $frenos = $_POST['nfrenos'];
    $neumaticos = $_POST['nneumaticos'];
    $largo = $_POST['nlargo'];
    $ancho = $_POST['nancho'];

    $alto = $_POST['nalto'];
    $tanque = $_POST['ntanque'];


    //imagenes


    $nimagen1 =$_FILES['nimagen1']['name'];
    $xnimagen1 =$_POST['xnimagen1'];

    $nimagen2 =$_FILES['nimagen2']['name'];
    $xnimagen2 =$_POST['xnimagen2'];

    $nimagen3 =$_FILES['nimagen3']['name'];
    $xnimagen3 =$_POST['xnimagen3'];



    if ($nimagen1==""){

        $destino1 =$xnimagen1;
    
    } else {
    
    $nombre = $_FILES['nimagen1']['name'];
    $nombrer = strtolower($nombre);
    $cd=$_FILES['nimagen1']['tmp_name'];
    $ruta = "imagenes/".$_FILES['nimagen1']['name'];
    $destino1 = "imagenes/".$nombrer;
    $resultado = @move_uploaded_file($_FILES["nimagen1"]["tmp_name"], $ruta);
       
    }

    if ($nimagen2==""){

        $destino2 =$xnimagen2;
    
    } else {
    
    $nombre = $_FILES['nimagen2']['name'];
    $nombrer = strtolower($nombre);
    $cd=$_FILES['nimagen2']['tmp_name'];
    $ruta = "imagenes/".$_FILES['nimagen2']['name'];
    $destino2 = "imagenes/".$nombrer;
    $resultado = @move_uploaded_file($_FILES["nimagen2"]["tmp_name"], $ruta);
       
    }


    if ($nimagen3==""){

        $destino3 =$xnimagen3;
    
    } else {
    
        $nombre = $_FILES['nimagen3']['name'];
        $nombrer = strtolower($nombre);
        $cd=$_FILES['nimagen3']['tmp_name'];
        $ruta = "imagenes/".$_FILES['nimagen3']['name'];
        $destino3 = "imagenes/".$nombrer;
        $resultado = @move_uploaded_file($_FILES["nimagen3"]["tmp_name"], $ruta);
       
    }




    //modificar
    $modificar = "UPDATE autos SET modelo='$modelo', kilometros='$kilometros', ciudad='$ciudad', tipodepago='$tipodepago',  precio='$precio', descripcion='$descripcion', imguno='$destino1',imgdos='$destino2',imgtres='$destino3', combustible='$combustible', cilindros='$cilindros', valvulas='$valvulas',  alimentacion='$alimentacion', aceleracion='$aceleracion',velocidad='$velocidad', traccion='$traccion', transmision='$transmision', frenos='$frenos',  neumaticos='$neumaticos', largo='$largo', ancho='$ancho',  alto='$alto', tanque='$tanque' WHERE id = '$id'";


    $resultado = mysqli_query($conexion, $modificar);

    if ($resultado) {
        echo "<script>
        alert('Se actualizo'); 
        window.location='../editar.php';
        </script>";
    }else {
        echo "<script>
        alert('No se actualizo'); 
        window.history.go(-1);
        </script>";
    }
?>