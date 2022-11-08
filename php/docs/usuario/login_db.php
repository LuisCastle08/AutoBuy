<?php
    
    session_Start();

    include '../conexion/conexion.php';
    $correo = $_POST['correo'];
    $contrasenia = $_POST['contrasenia'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM user where correo='$correo' 
    and contrasenia='$contrasenia'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['correo'] = $correo;
        header("location: ../index.php");
        exit;
    }else{
        echo '
        <script> 
           alert("correo o Contraseña no son correctos, por favor verifique los datos");
            window.location = "login.php";
        </script>
        ';
        exit;
    }
?>