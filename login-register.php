<?php
    session_start();

    if(isset($_SESSION['usuario'])){
        header("location:index.html");
    }

    include("php/config.php");

    $login_button='';

    if(isset($_GET["code"]))
    {
        $token = $google_client-> fetchAccessTokenWithAuthCode($_GET["code"]);

        if(!isset($token['error'])){
            $google_client->setAccessToken($token['access_token']);
            
            $_SESSION['access_token']= $token['access_token'];

            $google_service = new Google_Service_Oauth2($google_client);

            $data = $google_service-> userinfo->get();  

            if(!empty($data['given_name'])){
                $_SESSION['user_first_name'] = $data['given_name'];
            }
            if(!empty($data['family_name'])){
                $_SESSION['user_last_name'] = $data['family_name'];
            }
            if(!empty($data['email'])){
                $_SESSION['user_email_address'] = $data['email'];
            }
            if(!empty($_SESSION['gender'])){
                $_SESSION['user_gender'] = $data['gender'];
            }
            if(!empty($_SESSION['picture'])){
                $_SESSION['user_image'] = $data['picture'];
            }
        }
    }
    if(!isset($_SESSION['access_token'])){
        $login_button = '<a class="button" href="'.$google_client->createAuthUrl().'"><img src="resources\google-login-button.jpg" style="width: 300px; height: 50px; margin-left: -45;"/></a>';

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rating UMovies</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
    <!--Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!--inicio sesion google-->
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="165414458909-dtip83puhgqmpjq9smk13ldm5ttmgp7c.apps.googleusercontent.com">
</head>
<body>
<div id="fb-root"></div>
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
                    <button id="btn__registrarse">Registrate</button>
                </div>
            </div> 
            <div class="contenedor__login-register">
                <!--Caja-Formulario Login-->
                <form action="php\login_usuario_be.php" method="POST" class="formulario__login">
                    
                    <h2>Inicia Sesión</h2>
                    <input type="text" placeholder="Correo Electrónico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <div class="form-group">
                    <button style="width:300px" >Iniciar Sesión</button>
                   <!-- <button type="button" class="btn btn-lg btn-primary">Iniciar Sesión</button> -->
                    </div> 
                <!--Botón google-->
                <?php
                    if($login_button == ''){
                        header("location:index.html");
                        
                    }
                    else{
                        echo '<div align="center">'.$login_button . '</div>';
                    }
                ?>
                                           
                </form>
                <!--Caja-Formulario Registro-->
                <form action="php\registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Registrate</h2>
                    <input type="text" placeholder="Nombre" name="nombre_completo">
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Completar registro</button>
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