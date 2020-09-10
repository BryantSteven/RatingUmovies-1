<?php

//acceso a la BD
    include 'conexion_be.php';

    $nombre_completo = $_POST ['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario= $_POST['usuario'];
    $contrasena= $_POST['contrasena'];
    //encriptacion contraseña
    $contrasena= hash('sha512',$contrasena);
    //query
    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasena')";

    //dato de correo no se repite  en la BD de registro
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");

    if(mysqli_num_rows($verificar_correo) > 0 ){
        echo'
            <script>
                alert("Este correo ya se encuentra registrado, prueba con otro correo");
                window.location ="../login-register.php";
            </script>
        ';
        exit(); //Termina el script actual
    }


    //dato de usuario no se repite  en la BD de registro
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");

    if(mysqli_num_rows($verificar_usuario) > 0 ){
        echo'
            <script>
                alert("Este usuario ya se encuentra en uso, prueba con otro usuario, sé creativo");
                window.location ="../login-register.php";
            </script>
        ';
        exit(); //Termina el script actual
    }

    //ejecucionQuery
    $ejecutar = mysqli_query($conexion, $query);

    if(ejecutar){
        echo '
            <script>
                alert("Usuario almacenado exitosamente");
                window.location="../login-register.php";
            </script>
            ';
    }else{
        echo '
            <script>
                alert("Intentalo de nuevo, usuario no almacenado");
                window.location = "../index.php";
            </script>
            ';
    }
    mysqli_close($conexion);

?>