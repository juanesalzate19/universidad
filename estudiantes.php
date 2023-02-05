<script>
    function confirmar() {
            let conf = confirm("¿Estas seguro que deseas cancelar materia?");
            if(conf == true){
                return true;
            }else{
                return false;
            }
        }
  </script>

<?php
include('abrir_conexion.php');
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
                <img class="img-fluid rounded" src="imagenes/Logo2.png" alt="" width="300px">
            </div>
            <div class="col-sm-8 ">
                <ul class="nav nav-tabs justify-content-end my-3 ">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><button type="button" class="btn btn-link"
                                style="color: rgb(0, 0, 0);">HOME</button></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link"><button name="btn-inter" onclick="saludame4(1);"
                                type="button" class="btn btn-link" style="color: rgb(0, 0, 0);">VER NOTAS</button></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" ><button button name="btn-inter" onclick="saludame5(2);"
                        type="button" class="btn btn-link" style="color: rgb(0, 0, 0);">CANCELAR MATRICULA</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container2 my-4">
        <div class="row">
            <div class="col-sm-12 my-3">
                <div class="container-fluid text-center">
                    <div class="row">
                        <div class="col-sm-12 my-3 ">
                            <h2 style="color: white; font-family: 'Antonio';font-size: 50px;">TABLAS
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="container-fluid text-center" >
                    <div class="row">
                        <div class="col-sm-12">
                          <div id="mostrar_mensaje" style=" font-family:Georgia, 'Times New Roman', Times, serif;"></div>
                        </div>
                      </div>
                  </div>
            </div>
        </div>
    </div>

    <script src="java.js"></script>
    <script>
        function mi_busqueda() {
            buscar = document.getElementById('cuadro_buscar').value;
            var parametros =
            {
                "mi_busqueda": buscar,
                "accion": "4"
            };

            $.ajax({
                data: parametros,
                url: 'buscador.php',
                type: 'POST',

                beforesend: function () {
                    $('#mostrar_mensaje').html("Mensaje antes de Enviar");
                },

                success: function (mensaje) {
                    $('#mostrar_mensaje').html(mensaje);
                }
            });
        }

        function saludame4(boton) {
            accion = boton;
            var parametros =
            {
                "accion": accion
            };

            $.ajax({
                data: parametros,
                url: 'buscador4.php',
                type: 'POST',

                beforesend: function () {
                    $('#mostrar_mensaje').html("Mensaje antes de Enviar");
                },

                success: function (mensaje) {
                    $('#mostrar_mensaje').html(mensaje);
                }
            });
        }
        function saludame5(boton) {
            accion = boton;
            var parametros =
            {
                "accion": accion
            };

            $.ajax({
                data: parametros,
                url: 'buscador5.php',
                type: 'POST',

                beforesend: function () {
                    $('#mostrar_mensaje').html("Mensaje antes de Enviar");
                },

                success: function (mensaje) {
                    $('#mostrar_mensaje').html(mensaje);
                }
            });
        }
    </script>
    </form>
</body>

</html>