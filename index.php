<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formando futuros</title>
    <link rel="shortcut icon" href="imagenes/Logo1.jpg" type="image/x-icon">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="http://fonts.cdnfonts.com/css/aniyah-personal-use" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Antonio' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>

<body class="fondoIndex">
    <!-- logo -->
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-sm-4 my-3">
                <img class="img-fluid rounded" src="imagenes/Logo2.png" alt="" width="300px">
            </div>
            <div class="col-sm-8 ">
                <ul class="nav nav-tabs justify-content-end my-3 ">
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#exampleModal4" href="#"><button
                                type="button" class="btn btn-link" style="color: rgb(0, 0, 0);">CONÓCENOS</button></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-expanded="false"><button
                                type="button" class="btn btn-link " style="color: rgb(0, 0, 0);">SEDES</button></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" type="button" data-toggle="modal" data-target="#exampleModal"
                                href="#"> <img class="img-fluid rounded" src="imagenes/home.png" alt=""> MEDELLÍN</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" type="button" data-toggle="modal" data-target="#exampleModal2"
                                href="#"> <img class="img-fluid rounded" src="imagenes/home.png" alt="">
                                BARRANQUILLA</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" type="button" data-toggle="modal" data-target="#exampleModal3"
                                href="#"> <img class="img-fluid rounded" src="imagenes/home.png" alt=""> BOGOTÁ</a>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#footerIndex"><button type="button" class="btn btn-link"
                                style="color: rgb(0, 0, 0);">ATENCIÓN AL USUARIO</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ESTUDIANTES -->
    <div class="modal fade" id="estudiantes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content" style="background-image: url('imagenes/estudiantes2.png');background-position: center center;background-repeat: no-repeat;background-attachment: fixed;background-size: cover; color: white; ">
      <div class="modal-header">
        <h5 class="modal-title"  >INICIAR SESION</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style=" font: oblique bold 180% cursive;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="entrar.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Documento</label>
                <input title="Digita tu documento de identidad" type="text" class="form-control" name="doc" placeholder="Documento">
               
                <br>
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="pass" placeholder="Password">
              <br>
                <br>
                <button  name="btn-entrar" class="btn btn-light btn-lg btn-block">INICIAR SESION</button>
            </div>
            <div class="modal-footer text-center">
                <div class="col-sm-12">
                    ¿No estas registrado?<a href="registroEstudiantes.php">Registrate</a>
                   
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
    </div>
    <!-- EMPLEADOS -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content" style="background-image: url('imagenes/empleado2.png');background-position: center center;background-repeat: no-repeat;background-attachment: fixed;background-size: cover; color: white; ">
      <div class="modal-header">
        <h5 class="modal-title"  >INICIAR SESION</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style=" font: oblique bold 180% cursive;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="entrar1.php" method="POST">
            <div class="form-group">
                <label for="inputState">Selecione su Cargo</label>
                <select name="cargo" class="form-control">
                    <option value="↓">↓</option>
                    <option value="Docente">DOCENTE</option>
                    <option value="Decano">DECANO</option>
                </select>
                <br>
                <label for="inputState">Selecione su Materia</label>
                <select name="materia" class="form-control">
                    <option>↓</option>
                    <option value="1">Álgebra</option>
                    <option value="2">Algorítmica y Complejidad</option>
                    <option value="3">Arquitectura de computadores</option>
                    <option value="4">Arquitectura y diseño software</option>
                    <option value="5">Ecuaciones Diferenciales</option>
                    <option value="6">Física de Ondas</option>
                    <option value="7">Estadística Inferencial</option>
                    <option value="8">Circuitos Radioeléctricos y Señales</option>
                    <option value="9">Producción Multimedia</option>
                    <option value="10">Producción Gráfica</option>
                    <option value="11">Diseño Fotográfico</option>
                    <option value="12">Mercadotecnia</option>
                    <option value="13">Historia del Arte</option>
                    <option value="14">Estudio de la Imagen</option>
                    <option value="15">Redacción y Composición</option>
                    <option value="16">Tipografía</option>
                    <option value="17">Principios y Perspectivas de la Administración</option>
                    <option value="18">	Matemáticas para los Negocios</option>
                    <option value="19">Organización y Estructuras Organizacionales</option>
                    <option value="20">Comportamiento Organizacional</option>
                    <option value="21">Legislación laboral</option>
                    <option value="22">Seguridad y salud en el trabajo</option>
                    <option value="23">Factores de riesgo</option>
                    <option value="24">Salud ocupacional</option>
                </select>
                <br>
                <label for="exampleInputEmail1">Documento</label>
                <input title="Digita tu documento de identidad" type="text" class="form-control" name="doc" placeholder="Documento">
                <small id="emailHelp" class="form-text text-muted">Escribe tu documento registrado</small>
                <br>
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="pass" placeholder="Password">
                <small id="emailHelp" class="form-text text-muted">Escribe tu contraseña</small>
                <br>
                <button  name="btn-entrar" class="btn btn-primary btn-lg btn-block">INICIAR SESION</button>
            </div>
            <div class="modal-footer text-center">
                <div class="col-sm-12">
                    ¿No estas registrado?<a href="registroEmpleados.php">Registrate</a>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
    <!-- REGISTROS-->
    <div class="modal fade" id="registros" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header text-left">
                    <img width="100px" src="imagenes/fff-removebg-preview.png" alt="">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        style=" font: oblique bold 180% cursive;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid text-center">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="contenedor">
                                    <figure>
                                        <img class="img-fluid rounded" class="img-fluid rounded"
                                            src="imagenes/CV-visa-de-estudiante-scaled-e1593544695603.jpg" alt="">
                                        <div class="capa">
                                            <h3>REGISTRO PARA ESTUDIANTES</h3>
                                            <p>
                                                <a href="registroEstudiantes.php"><button
                                                        class="btn btn-primary">Entrar</button></a>
                                            </p>
                                        </div>
                                    </figure>
                                </div>
                                <h2>ESTUDIANTES</h2>
                            </div>
                            <div class="col-sm-6">
                                <div class="contenedor">
                                    <figure>
                                        <img class="img-fluid rounded" src="imagenes/profe.png" alt="">
                                        <div class="capa">
                                            <h3>REGISTRO PARA EMPLEADOS</h3>
                                            <p>
                                                <a type="button" href="registroEmpleados.php"><button type="button"
                                                        class="btn btn-primary">Entrar</button></a>
                                            </p>
                                        </div>
                                    </figure>
                                </div>
                                <h2>EMPLEADOS</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- VISTA MEDELLIN-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: rgb(0, 0, 0);font-family: 'Antonio';font-size: 40px;">SEDE
                        EN
                        MEDELLÍN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        style=" font: oblique bold 180% cursive;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid text-center">
                        <div class="row">
                            <div class="col-sm-12 ">
                                <a
                                    href="https://www.google.com/maps/dir//Parque+La+Floresta,+Cra.+84+%2345d-24,+Medell%C3%ADn,+La+Am%C3%A9rica,+Medell%C3%ADn,+Antioquia/@6.2557575,-75.6028119,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x8e44297396740ccb:0xdf2ebdea455df74c!2m2!1d-75.6015104!2d6.255824!3e0?hl=es"><img
                                        class="img-fluid rounded" style="width:300px ; border: black 2px solid;"
                                        src="imagenes/m1.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="container-fluid text-center">
                        <div class="row">
                            <div class="col-sm-12 ">
                                <img class="img-fluid rounded" style=" width:380px;" src="imagenes/Umedellin.jpeg"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer text-center">
                        <div class="col-sm-12">
                            <h6 style="color: rgb(0, 0, 0);font-family: 'Antonio';font-size: 20px;">Cra 84 #45d-24,
                                Medellín</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- VISTA BARRANQUILLA-->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: rgb(0, 0, 0);font-family: 'Antonio';font-size: 40px;">SEDE
                        EN
                        BARRANQUILLA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        style=" font: oblique bold 180% cursive;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid text-center">
                        <div class="row">
                            <div class="col-sm-12 ">
                                <a
                                    href="https://www.google.com/maps/dir//Parque+La+Floresta,+Cra.+84+%2345d-24,+Medell%C3%ADn,+La+Am%C3%A9rica,+Medell%C3%ADn,+Antioquia/@6.2557575,-75.6028119,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x8e44297396740ccb:0xdf2ebdea455df74c!2m2!1d-75.6015104!2d6.255824!3e0?hl=es"><img
                                        class="img-fluid rounded" style="width:300px ; border: black 2px solid;"
                                        src="imagenes/m3.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="container-fluid text-center">
                        <div class="row">
                            <div class="col-sm-12 ">
                                <img class="img-fluid rounded" style=" width:380px;" src="imagenes/Ubarranquilla.jpeg"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer text-center">
                        <div class="col-sm-12">
                            <h6 style="color: rgb(0, 0, 0);font-family: 'Antonio';font-size: 20px;"> Cra 42F
                                #80-117,
                                Barranquilla</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- VISTA BOGOTA-->
    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: rgb(0, 0, 0);font-family: 'Antonio';font-size: 40px;">SEDE
                        EN
                        BOGOTÁ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        style=" font: oblique bold 180% cursive;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid text-center">
                        <div class="row">
                            <div class="col-sm-12 ">
                                <a
                                    href="https://www.google.com/maps/dir//Engativ%C3%A1,+Bogot%C3%A1/@4.6676577,-74.1077931,14.75z/data=!4m9!4m8!1m0!1m5!1m1!1s0x8e3f9b75604d4907:0xb8a913429b47d213!2m2!1d-74.1021552!2d4.6674184!3e0?hl=es"><img
                                        class="img-fluid rounded" style="width:300px ; border: black 2px solid;"
                                        src="imagenes/m2.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="container-fluid text-center">
                        <div class="row">
                            <div class="col-sm-12 ">
                                <img class="img-fluid rounded" style=" width:380px;" src="imagenes/Ubogota.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer text-center">
                        <div class="col-sm-12">
                            <h6 style="color: rgb(0, 0, 0);font-family: 'Antonio';font-size: 20px;">Ac 17 #58,
                                Bogotá
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TITULOS -->
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-sm-12 my-3 ">
                <h1 style="font-family: 'Aniyah Personal Use', sans-serif;color: white;">F F</h1>
                <h6 style="color: white;font-family: 'Antonio';font-size: 20px;">FORMANDO FUTUROS</h6>
                <br>
                <h2 style="color: white; font-family: 'Antonio';font-size: 50px;">BIENVENIDOS</h2>
            </div>
        </div>
    </div>
    <br>

    <!-- INGRESOS -->
    <div class="container-fluid text-center" style=" font-family: Georgia, 'Times New Roman', Times, serif;">
        <div class="row">
            <div class="col-sm-3 my-3 ">
                <div class="contenedor">
                    <figure>
                        <img class="img-fluid rounded" class="img-fluid rounded" src="imagenes/estudiantes.jpg" alt="">
                        <div class="capa">
                            <h3>ESTUDIANTES</h3>
                            <p>
                                <a type="button" data-toggle="modal" data-target="#estudiantes"><button type="button"
                                        class="btn btn-primary">Entrar</button></a>
                            </p>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="col-sm-3 my-3 ">
                <div class="contenedor">
                    <figure>
                        <img class="img-fluid rounded" class="img-fluid rounded" src="imagenes/empleado.jpg" alt="">
                        <div class="capa">
                            <h3>EMPLEADOS</h3>
                            <p>
                                <a type="button" data-toggle="modal" data-target="#exampleModal1"><button type="button"
                                        class="btn btn-primary">Entrar</button></a>
                            </p>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="col-sm-3 my-3 ">
                <div class="contenedor">
                    <figure>
                        <img class="img-fluid rounded" class="img-fluid rounded" src="imagenes/mallas.jpeg" alt="">
                        <div class="capa">
                            <h3>MALLAS CURRICULARES</h3>
                            <p>
                                <a href="malla.php"><button type="button" class="btn btn-primary">Entrar</button></a>
                            </p>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="col-sm-3 my-3 ">
                <div class="contenedor">
                    <figure>
                        <img class="img-fluid rounded" class="img-fluid rounded" src="imagenes/registro.jpg" alt="">
                        <div class="capa">
                            <h3>REGISTROS</h3>
                            <p>
                                <a type="button" data-toggle="modal" data-target="#registros"><button type="button"
                                        class="btn btn-primary">Entrar</button></a>
                            </p>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </div>

    <br><br><br>
</body>
<!-- FOOTER -->
<footer class="footerIndex" id="footerIndex">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                <h2 style="color: rgb(0, 0, 0); font-family: 'Antonio';font-size: 50px;">CONTÁCTANOS</h2>
            </div>
        </div>
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4 pie">
                    <br>
                    <a href="https://www.google.com/intl/es-419/gmail/about/"><img style="width:40px ;"
                            src="imagenes/telefono.png" alt=""></a>
                    <P>77-88541<br> MEDELLÍN</P>
                </div>
                <div class="col-md-4 pie">
                    <br>
                    <a href="https://www.youtube.com/"><img style="width:40px ;" src="imagenes/telefono.png" alt=""></a>
                    <p>45-55217 <br> BARRANQUILLA</p>
                </div>
                <div class="col-md-4 pie">
                    <br>
                    <a href="https://www.whatsapp.com/?lang=es"><img style="width:40px ;" src="imagenes/telefono.png"
                            alt=""></a>
                    <p>28-19943<br> BOGOTÁ</p>
                </div>
            </div>
        </div>
</footer>
<footer class="footerIndex">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-3 pie">
                <br>
                <a href="https://www.youtube.com/"><img style="width:60px ;" src="imagenes/twitter.png" alt=""></a>
                <p>@FormandoFuturos<br>TWITTER</p>
            </div>
            <div class="col-md-3 pie">
                <br>
                <a href="https://www.whatsapp.com/?lang=es"><img style="width:60px ;" src="imagenes/wpp.png" alt=""></a>
                <p>310-2186385<br> WHATSAPP</p>
            </div>
            <div class="col-md-3">
            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
<link rel="stylesheet" href="js/bootstrap.min.js">

</html>