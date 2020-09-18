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

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <link rel="stylesheet" href="assets/css/nav.component.css">

  <title>Gestión Usuarios</title>
</head>

<body>
  <div class="menu">
    <!--Pestañas del sub-menú-->
    <ul class="nav nav-pills red" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link" id="inicio-tab" data-toggle="tab" href="#inicio" role="tab" aria-controls="inicio"
          aria-selected="false">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="perfil-tab" data-toggle="tab" href="#perfil" role="tab" aria-controls="perfil"
          aria-selected="false">Roles</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="publicaciones-tab" data-toggle="tab" href="#publicaciones" role="tab" aria-controls="publicaciones"
          aria-selected="false"> Publicaciones</a>
      </li>
    </ul>

    <!--Navegación interna de las pestañas-->
    <div class="tab-content" id="myTabContent">

      <div class="tab-pane fade show active" id="inicio" role="tabpanel" aria-labelledby="inicio-tab">1</div>
      <div class="tab-pane fade" id="publicaciones" role="tabpanel" aria-labelledby="publicaciones-tab">2</div>
      <div class="tab-pane fade " id="perfil" role="tabpanel" aria-labelledby="perfil-tab">
        <div class="wrapper-editor">
          <div class="row d-flex justify-content-center modalWrapper">
            <div class="modal fade addNewInputs" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="modalAdd"
              aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                      <input type="text" id="inputNombre" class="form-control validate">
                      <label data-error="wrong" data-success="right" for="inputNombre">Nombre</label>
                    </div>
                    <div class="md-form mb-5">
                      <input type="text" id="inputTipo" class="form-control validate">
                      <label data-error="wrong" data-success="right" for="inputTipo">Tipo</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <h1>Roles existentes</h1>
          <section class="botones">
            <button>Crear rol</button>
          </section><br>

          <table class="table table-hover" id="dtBasicExample">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Usuario</th>
                <th scope="col">Rol</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>angie</td>
                <td>Administrador</td>

              </tr>
              <tr>
                <th scope="row">2</th>
                <td>sylas</td>
                <td>Productor</td>
              </tr>

            </tbody>
          </table>

          <div class="card" id="formAgregar">
            <div class="card-header">
              Formulario de asignación de roles
            </div>
            <div class="card-body">
              <!-- Nombre -->
              <h2 class="texto">Nombre</h2>
              <h3 class="texto">Ejemplo: Suza Nahoria ...</h3>
              <input type="text" id="defaultContactFormName" class="form-control mb-4">
              <!-- Tipo de perfil -->
              <h2 class="texto">Tipo</h2>
              <h3 class="texto">Ejemplo: Administrador, Reseñador, Productor</h3>
              <input type="email" id="defaultContactFormEmail" class="form-control mb-4">

              <!-- Button trigger modal -->
              <!-- Button trigger modal -->
              <button type="button" class="secundarios" data-toggle="modal" data-target="#basicExampleModal">
                Launch demo modal
              </button><br><br>

              <!-- Modal -->
              <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                      <button id="cerrar" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">-</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      ...
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="secundarios" data-dismiss="modal">Cancelar</button>
                      <button type="button" class="secundarios">Guardar cambios</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer text-muted"></div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <li><a href="php/cerrar_sesion.php">Cerrar Sesión</a></li>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
      integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
      crossorigin="anonymous"></script>
</body>

</html>