<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
    <script src="jquery.js"></script>
    <link rel="shortcut icon" href="imagenes/Logo1.jpg" type="image/x-icon">
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
                        <a class="nav-link" href="index.php"><button type="button" class="btn btn-link"
                                style="color: rgb(0, 0, 0);">HOME</button></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-expanded="false"><button
                                type="button" class="btn btn-link " style="color: rgb(0, 0, 0);">REGISTROS</button></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" type="button" href="registroEstudiantes.php"> <img
                                    style="width:25px ;" class="img-fluid rounded" src="imagenes/Restudiante.png"
                                    alt="">ESTUDIANTES</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" type="button" href="registroEmpleados.php"> <img
                                    style="width:25px ;" class="img-fluid rounded" src="imagenes/Rempleado.png"
                                    alt="">EMPLEADOS</a>
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
   
    <?php
include("abrir_conexion.php");
    $doc="";    
    $nom="";
    $tel=""; 
    $correo="";
    $materia="";
    $cargo="";
    $pass1="";
    
    if(isset($_POST["btn-enviar"])){
        $doc=$_POST["docDEC"];
        $nom=$_POST ["nomDEC"];
        $tel=$_POST ["telDEC"];
        $correo=$_POST ["correoDEC"];
        $materia=$_POST ["materia"];
        $cargo=$_POST ["cargo"];
        $pass1=$_POST ["pass1"];
      
        if($nom=="" || $correo=="" || $doc=="" || $tel==""|| $pass1==""|| $materia=="↓"|| $cargo=="↓"){
            echo "<div class='alert alert-danger text-center alert-dismissible fade show' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                <span class='sr-only'>Close</span>
            </button>
            CAMPOS OBLIGATORIOS</div>";  
        }else{
            $res= $conexion ->prepare("insert into administracion(documento,nombre,telefono,correo,id_materia,cargo,
            contraseña)values(?,?,?,?,?,?,?)");
                $res->bind_param("isssiss",$doc,$nom,$tel,$correo,$materia,$cargo,$pass1);
                $res->execute();
                echo "<div class='alert alert-primary text-center  alert-dismissible fade show' role='alert'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    <span class='sr-only'>Close</span>
                </button>
                DATOS GUARDADOS </div>"; 
            }
        }
            ?>
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-sm-12">
                <h2 style="color: white; font-family: 'Antonio';font-size: 50px;">REGISTRO EMPLEADO</h2>
            </div>
        </div>
    </div>

    <form class="datos1" method="POST" style="padding: 40px;">
        <div>
        <div class="form-row">
            <div class="col-sm-12">
                <label>Nombre</label>
                <input name="nomDEC" type="text" class="form-control" placeholder="Nombre del estudiante." >
            </div>
           
        </div>
        <br>
        <div class="form-row ">
            <div class="col-sm-4">
                <label>Documento</label>
                <input name="docDEC" type="text" class="form-control" placeholder="Documento de identidad.">
            </div>
            <div class="col-sm-4">
                <label>Correo</label>
                <input name="correoDEC" type="email" class="form-control" id="exampleFormControlInput1" placeholder="Correo electrónico.">
            </div>
            <div class="col-sm-4">
                <label>Teléfono</label>
                <input name="telDEC" type="text" class="form-control" placeholder="Teléfono celular.">
            </div>
        </div>
        <br>            
        <div class="form-row">
            <div class="col-sm-6">
                <label>Contraseña</label>
                <input name="pass1" type="password" id="inputPassword6" class="form-control " aria-describedby="passwordHelpInline" placeholder="Debe tener  entre 8 y 20 caracteres.">
            </div>
            <div class="col-sm-6">
                <label>Confirmar contraseña</label>
                <input name="pass2" type="password" id="inputPassword6" class="form-control " aria-describedby="passwordHelpInline" placeholder="Debe tener  entre 8 y 20 caracteres.">
            </div>
        </div>
        <br>
        <div class="form-row">
            <div class="col-sm-6">
                <label for="inputState">Selecione su Cargo</label>
                <select name="cargo" class="form-control">
                    <option value="↓">↓</option>
                    <option value="Docente">DOCENTE</option>
                    <option value="Decano">DECANO</option>
                </select>
            </div>
            <div class="col-sm-6">
            <label for="inputState">Selecione su Materia</label>
                <select name="materia" class="form-control">
                    <option>↓</option>
                    <option value="1">Álgebra</option>
                    <option value="3">Arquitectura de computadores</option>
                   
                    <option value="5">Ecuaciones Diferenciales</option>
                    
                    <option value="7">Estadística Inferencial</option>
                   
                    <option value="9">Producción Multimedia</option>
                    
                    <option value="11">Diseño Fotográfico</option>
                   
                    <option value="13">Historia del Arte</option>
                   
                    <option value="15">Redacción y Composición</option>
                  
                    <option value="17">Principios y Perspectivas de la Administración</option>
                   
                    <option value="19">Organización y Estructuras Organizacionales</option>
                   
                    <option value="21">Legislación laboral</option>
                 
                    <option value="23">Factores de riesgo</option>
                    
                </select>
            </div>
        </div>
    
        <br>
        <a><button title="¡Click! para guardar tus datos" name="btn-enviar"class="btn btn-light btn-lg btn-block" >REGISTRARSE</button></a>
        </div>
    </form>
    <br><br>

</body>
<footer class="footerRegistroEST" id="footerIndex">
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
<footer class="footerRegistroEST">
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
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
<link rel="stylesheet" href="js/bootstrap.min.js">

</html>