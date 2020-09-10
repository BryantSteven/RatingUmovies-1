<?php
    session_start();

    if(isset($_SESSION['usuario'])){
        header("location:bienvenido.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register - UMovies</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
    <main> <!--control proyecto-->
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para ingresar</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Registrate para ingresar</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div> 
            <div class="contenedor__login-register">
                <!--Caja-Formulario Login-->
                <form action="php\login_usuario_be.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electrónico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Iniciar Sesión</button>
                </form>
                <!--Caja-Formulario Registro-->
                <form action="php\registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Entrar</button>
                </form>
            </div>

        </div>
    </main>
    <script src="assets\js\script.js"></script>
</body>
</html>