<?php

$user = (object)[
    'name' => 'Nombre 1',
    'lastname' => 'Apellido 1',
    'email' => 'Email@Mail.com'

];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Mi perfil</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="sideNav" style="background-color: black">
        <div style="position: absolute;top:0;left:0;width:100%;height:100%;background: url('assets/img/wallpaper1.jpg');opacity: 0.4;z-index: -1;">
        </div>

        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">Mi perfil</span>
            <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/profileOscar.jpg" alt="" /></span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Sobre mi</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#likes">Mis gustos</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#recomended_content">Contenido recomendado</a>
                </li>

            </ul>
        </div>
    </nav>
    <!-- Page Content-->
    <div class="container-fluid p-0">
        <!-- Sobre mi-->
        <section class="resume-section" id="about">
            <div class="resume-section-content">
                <h1 class="mb-0">
                    <?php echo $user->name; ?>
                    <span class="text-primary"><?php echo $user->lastname; ?> </span>
                </h1>
                <div class="subheading mb-5">
                    Aqui debe ir el correo del usuario -->
                    <a href="mailto:<?php echo $user->email; ?>"><?php echo $user->email; ?></a>
                </div>
                <p class="lead mb-5">Aqui debe ir la descripcion que el usuario quiera darse, esto debe ser un campo
                    editable</p>
                <div class="social-icons">
                    <a class="social-icon" href="https://twitter.com/home?lang=es" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a class="social-icon" href="https://www.facebook.com/?ref=tn_tnmn" target="_blank"><i class="fab fa-facebook-f"></i></a>
                </div>
                <div>
                    <button type="button" class="btn btn-outline-success" style="
                  margin-top: 30Px" ;>Actualizar informacion</button>
                </div>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Mis gustos -->
        <section class="resume-section" id="likes">
            <div class="resume-section-content">
                <h2 class="mb-5">Mis gustos </h2>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">Terror</h3>
                        <div class="subheading mb-3">Film favorito:</div>
                        <p>Aqui debe ir un campo que permita ser editado para agregar la descripcion del gusto</p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">Aqui debe ir la ultima fecha de edicion del gusto</span></div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">Accion</h3>
                        <div class="subheading mb-3">Film favorito: </div>
                        <p>Aqui debe ir un campo que permita ser editado para agregar la descripcion del gusto</p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">Aqui debe ir la ultima fecha de edicion del gusto</span></div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">Comedia</h3>
                        <div class="subheading mb-3">Film favorito: </div>
                        <p>Aqui debe ir un campo que permita ser editado para agregar la descripcion del gusto</p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">Aqui debe ir la ultima fecha de edicion del gusto</span></div>
                </div>
                <div>
                    <button type="button" class="btn btn-outline-success" style="
                  margin-top: 5Px" ;>Actualizar gustos</button>
                </div>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Contenido Recomendado -->
        <section class="resume-section" id="recomended_content">
            <div class="resume-section-content">
                <h2 class="mb-5">Contenido recomendado por mi</h2>
                <div class="row">
                <div class="card col-4">
                        <img class="card-img-top" src="assets/img/Movie1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Consumir api para titulo y caratula</h5>
                            <p class="card-text">consumir api para descripcion</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Consumir api para autor/director</li>
                            <li class="list-group-item">Consumir api para actores principales</li>
                            <li class="list-group-item">consumir api estudio cine</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="card-link">Este sera un link al detalle de la pelicula</a>
                        </div>
                    </div>
                    <div class="card col-4">
                        <img class="card-img-top" src="assets/img/Movie2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Consumir api para titulo y caratula</h5>
                            <p class="card-text">consumir api para descripcion</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Consumir api para autor/director</li>
                            <li class="list-group-item">Consumir api para actores principales</li>
                            <li class="list-group-item">consumir api estudio cine</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="card-link">Este sera un link al detalle de la pelicula</a>
                        </div>
                    </div>
                    <div class="card col-4">
                        <img class="card-img-top" src="assets/img/Movie3.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Consumir api para titulo y caratula</h5>
                            <p class="card-text">consumir api para descripcion</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Consumir api para autor/director</li>
                            <li class="list-group-item">Consumir api para actores principales</li>
                            <li class="list-group-item">consumir api estudio cine</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="card-link">Este sera un link al detalle de la pelicula</a>
                        </div>
                    </div>
            </div>
        </section>
        <hr class="m-0" />

        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
</body>

</html>