<?php
include_once "abrir_conexion.php";
$doc = $_GET['codigo_cali'];
$sql = "SELECT * FROM calificaciones WHERE codigo_cali ='$doc'";
$query = mysqli_query($conexion,$sql);
$row=mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formando futuros</title>
    <link rel="shortcut icon" href="imagenes/Logo1.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="jquery.js"></script>
</head>

<body class="fondoIndex">
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-sm-4 my-3">
                <img class="img-fluid rounded" src="imagenes/Logo2.png" alt="" width="270px">
            </div>
            <div class="col-sm-8 ">
                <ul class="nav nav-tabs justify-content-end my-3 ">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><button type="button" class="btn btn-link"
                                style="color: rgb(0, 0, 0);">HOME</button></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="docente.php"><button type="button" class="btn btn-link"
                                style="color: rgb(0, 0, 0);">VER NOTAS</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-sm-12">
                <h2 style="color: white; font-family: 'Antonio';font-size: 50px;">CAMBIO DE NOTAS</h2>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid ">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="card mb-3" style="background: rgb(255, 255, 255); -webkit-box-shadow: -1px 0px 14px 6px rgba(201, 37, 37, 0.51); 
                box-shadow: -1px 0px 14px 6px rgba(175, 175, 175, 0.51); border: 2px solid #b4b4b4;
                            border-radius: 20px;">
                    <div class="row no-gutters">
                        <div class="col-sm-3">
                            <img class="img-fluid " style="
                            border-radius: 20px;" src="imagenes/a+.png" alt="...">
                        </div>
                        <div class="col-sm-9">
                            <div class="card-body">

                                <div class="container-fluid" style=" font-family: 'Antonio';font-size: 18px;">
                                    <form action="agregar.php" method="get">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="inputState">Codigo</label>
                                                    <input type="text" class="form-control" name="id" id="id"
                                                        value="<?php echo $row['codigo_cali'];  ?>" readonly>
                                                    <br>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="inputState">Documento</label>
                                                    <input id="documento_est" class="form-control" name="documento_est"
                                                        type="text" placeholder="Digite su documento"
                                                        value="<?php echo $row['documento_est']; ?>" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <label for="inputState">Nombre</label>
                                                    <input id="nombre" class="form-control" name="nombre" type="text"
                                                        placeholder="nombre" value="<?php echo $row['nombre']; ?>"
                                                        readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label for="inputState">Carrera</label>
                                                    <input id="carrera" class="form-control" name="carrera" type="text"
                                                        placeholder="carrera" value="<?php echo $row['carrera']; ?>"
                                                        readonly>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label for="inputState">Semestre</label>
                                                    <input id="semestre" class="form-control" name="semestre"
                                                        type="text" placeholder="semestre"
                                                        value="<?php echo $row['semestre']; ?>" readonly>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label for="inputState">Materia</label>
                                                    <input id="id_materia" class="form-control" name="id_materia"
                                                        type="text" placeholder="numero de materia"
                                                        value="<?php echo $row['id_materia']; ?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="inputState">Nota #1</label>
                                                    <input id="nota1" class="form-control" name="nota1" type="text"
                                                        placeholder="primer nota" value="<?php echo $row['nota1']; ?>">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="inputState">Nota #2</label>
                                                    <input id="nota2" class="form-control" name="nota2" type="text"
                                                        placeholder="segunda nota" value="<?php echo $row['nota2']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <label for="inputState">Promedio</label>
                                                    <input id="promedio" class="form-control" name="promedio"
                                                        type="text" placeholder="promedio"
                                                        value="<?php echo $row['promedio']; ?>" readonly>
                                                    <br>
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-sm-12 text-center">
                                                                <button type="submit"
                                                                    class="btn btn-danger btn-lg btn-block">MODIFICAR</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </div>
</body>

</html>