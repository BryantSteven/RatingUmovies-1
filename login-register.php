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
    <!--Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!--inicio sesion google-->
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="165414458909-dtip83puhgqmpjq9smk13ldm5ttmgp7c.apps.googleusercontent.com">
</head>
<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect..net/es_LA/sdk.js#xfbml=1&version=v8.0&appId=347058202993916&autoLogAppEvents=1" nonce="5Ct4tpao"></script>
    <main> <!--control proyecto-->
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para ingresar</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register form-group">
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
                    <div class="form-group">
                    <button>Iniciar Sesión</button>
                   <!-- <button type="button" class="btn btn-lg btn-primary">Iniciar Sesión</button> -->
                    </div> 
                <div class="form-group">
                    <div id="my-signin2"  data-width="300" data-height="40" data-longtitle="false"></div>
                        <script>
                          function onSuccess(googleUser) {
                            console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
                          }
                          function onFailure(error) {
                            console.log(error);
                          }
                          function renderButton() {
                            gapi.signin2.render('my-signin2', {
                              'scope': 'profile email',
                              'width': 300,
                              'height': 40,
                              'longtitle': true,
                              'theme': 'dark',
                              'onsuccess': onSuccess,
                              'onfailure': onFailure
                            });
                          }
                        </script>
                        <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
                </div>
                    <div class="fb-login-button " data-size="large" data-button-type="login_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="false" data-width="300"></div>                         
                </form>
                <!--Caja-Formulario Registro-->
                <form action="php\registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Registrar</button>
                </form>
            </div>

        </div>
    </main>
    <script src="assets\js\script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>