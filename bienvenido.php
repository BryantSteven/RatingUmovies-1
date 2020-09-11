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
    <title>Buscador</title>
</head>
<style>
    body {
        margin: 0px;
        background-color: #14181c;
    }
    .header {
        background-color: #14181c;
        width: 100%;
        height: 65px ;
        display: flex;
        justify-content: space-between;
    }
    .header__img {
        width: 200px;
        margin-top: 10px;
        margin-left: 10px;
    
    }
    .header__menu{
        margin-right: 30px;
    }
    .header__menu ul{
        /*display: none;*/
        list-style: none;
        padding:0px ;
        position: absolute;
        width: 100px;
        text-align: right;
        margin: 0px 0px 0px -14px; 
    }
    .header__menu--profile {
        margin-right: 8px;
        width: 40 px;
    }

</style> 
<body>
    <header class="header">
        <img class="header__img" src="resources\logo.png" alt="">
        <div class="header__menu">
            <div class="header__menu--profile">
                <img src="resources\profile.png" alt="User">
                <p>Perfil</p>
            </div>
            <ul>
                <li><a href="/">Cuenta</a></li>
                <li><a href="php/cerrar_sesion.php">Cerrar Sesión</a></li>
            </ul>
        </div>
    </header>
</body>  
</html>