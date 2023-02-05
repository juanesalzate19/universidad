<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOWASH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylelogin.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="shortcut icon" href="IMG/logo.png" type="image/x-icon">
</head>

<body>
    <nav class="barra navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <a class="navbar-brand text-center" href="#">
                <img src="IMG/logo.png" alt="" width="60" height="50" class="">
                <br>
                <p>EcoWash</p>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class=" collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="lista navbar-nav">
                    <li class="nav-item">
                        <a class="" href="/">¿Quienes Somos?</a>
                    </li>
                    <li class="nav-item">
                        <a class="" href="calendario.php">Servicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="" href="registro.php">Registrate</a>
                    </li>
                    <li class="nav-item">
                        <a class="" href="login.php">Ingresar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Formulario de registro -->
    <div class="container ">
        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="datos1 form signup col-sm-6">
                <center><span class="title">Registrate</span></center>
                <form method="POST">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-field">
                                <input type="text" name="documento" placeholder="Documento" required>
                                <i class="uil uil-postcard"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-field">
                                <input type="text" name="usuario" placeholder="Usuario" required>
                                <i class="uil uil-user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-field">
                                <input type="text" name="nombre" placeholder="Nombre Completo" required>
                                <i class="uil uil-user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-field">
                                <input type="text" name="correo" placeholder="Correo" required>
                                <i class="uil uil-at"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="input-field">
                                <input type="text" name="telefono" placeholder="Teléfono" required>
                                <i class="uil uil-phone"></i>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-field">
                                <input type="text" name="direccion" placeholder="Dirección" required>
                                <i class="uil uil-map-pin-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="input-field">
                                <input type="password" name="contrasena" class="password" placeholder="Crear contraseña" required>
                                <i class="uil uil-lock icon"></i>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-field">
                                <input type="password" class="password" placeholder="Confirmar contraseña" required>
                                <i class="uil uil-lock icon"></i>
                                <i class="uil uil-eye-slash showHidePw"></i>
                            </div>
                        </div>
                    </div>
                    <div class="input-field button">
                        <button type="submit" name="btn-enviar" value="Registrar"></button>
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">¿Ya estás registrado?
                        <a href="clienteingreso" class="text login-link">Ingresar ahora</a>
                    </span>
                    <br><br>
                </div>
            </div>
            <div class="col-sm-3">
            </div>
        </div>
    </div>

    <script src="{{url_for('static',filename='javascript/scriptlogin.js')}}"></script>
    <footer class="barra2 text-white text-center text-lg-start">
        <div class="container p-1">
            <div class="row mt-4">
                <div class="col-sm-4">
                    <h5 class="text-uppercase">EcoWash</h5>
                    <p>
                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                        praesentium
                        voluptatum deleniti atque corrupti.
                    </p>
                    <p>
                        Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas
                        molestias.
                    </p>
                </div>
                <div class="col-sm-4">
                    <ul>
                        <h5 class="text-uppercase mb-4"> Contactanos</h5>
                        <li class="mb-3">
                            <span class="ms-2">MEDELLIN</span>
                        </li>
                        <li class="mb-3">
                            <span class="ms-2">EcoWash@gmail.com</span>
                        </li>
                        <li class="mb-3">
                            <span class="ms-2">+57 234 567 88</span>
                        </li>
                    </ul>
                    <div>
                        <a type="button" class="btn btn-floating "><img src="IMG/ig.png"></a>
                        <a type="button" class="btn btn-floating  "><img src="IMG/fb.png"></a>
                        <a type="button" class="btn btn-floating  "><img src="IMG/wpp.png"></a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <h5 class="text-uppercase mb-4">Horarios de atencion</h5>
                    <table class="table text-center text-white">
                        <tbody>
                            <tr>
                                <td>Mon - Thu:</td>
                                <td>8am - 9pm</td>
                            </tr>
                            <tr>
                                <td>Fri - Sat:</td>
                                <td>8am - 1am</td>
                            </tr>
                            <tr>
                                <td>Sunday:</td>
                                <td>9am - 10pm</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            <p>&copy; EcoWash 2022</p>
        </div>
    </footer>

    <?php
    include("conexion.php");
    $documento="";    
    $usuario="";
    $nombre=""; 
    $correo="";
    $telefono="";
    $direccion="";
    $contrasena="";
    
    if(isset($_POST["btn-enviar"])){
        $documento=$_POST["documento"];
        $usuario=$_POST ["usuario"];
        $nombre=$_POST ["nombre"];
        $correo=$_POST ["correo"];
        $telefono=$_POST ["telefono"];
        $direccion=$_POST ["direccion"];
        $contrasena=$_POST ["contrasena"];
      
        if($documento=="" || $usuario=="" || $nombre=="" || $correo==""|| $telefono==""|| $direccion==""|| $contrasena==""){
        }else{
            $res= $conexion ->prepare("insert into cliente(documento,usuario,nombre,correo,telefono,direccion,
            contrasena)values(?,?,?,?,?,?,?)");
                $res->bind_param("isssiss",$documento,$usuario,$nombre,$correo,$telefono,$direccion,$contrasena);
                $res->execute();
            }
        }
            ?>
</body>

</html>