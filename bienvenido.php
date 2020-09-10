<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Para acceder a este módulo, debes iniciar sesión");
                window.location= "login-register.php";
            </script>
        ';
        session_destroy();
        die();
    }
    //session_destrodfsfy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
</head>
<body>
    <h1>Bem vindo filho da puta</h1>
    <a href="php/cerrar_sesion.php">Cerrar Sesión</a>
</body>
</html>
