<?php
include('abrir_conexion.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
        <ul class="nav nav-tabs justify-content-end my-1 ">
          <li class="nav-item">
          <a class="nav-link" href="index.php"><button type="button" class="btn btn-link"
                                style="color: rgb(0, 0, 0);">HOME</button></a>
          </li>
          <li  class="nav-item ">
            <a class="nav-link" ><button name="btn-notas" onclick="saludame(1);" type="button" class="btn btn-link"
              style="color: rgb(0, 0, 0);">VER NOTAS</button></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" ><button name="btn-cant" class="btn btn-link"
            onclick="saludame1(2);"  style="color: rgb(0, 0, 0);">CANTIDAD DE ESTUDIANTES </button></a>
          </li>
          <li class="nav-item " >
            <a class="nav-link" ><button name="btn-est" class="btn btn-link"
            onclick="saludame2(3);" style="color: rgb(0, 0, 0);">ESTADO DE ESTUDIANTES  </button></a>
          </li>
        </ul>
      </div>
    </div> 
  </div>
    <div class="container2 my-4">
        <div class="row">
            <div class="col-sm-12 my-3">
                <!-- <thead>
                    <br>
                    <div class="container-fluid text-center">
                        <div class="row">
                            <div class="col-sm-12 my-3 ">
                                <input type="text" class="form-control text-center" name="busqueda" id="cuadro_buscar"
                                    onkeypress="mi_busqueda();" placeholder="BUSQUE POR EL NOMBRE">
                            </div>
                        </div>
                    </div>
                </thead> -->
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
                        <div class="col-sm-12 my-3">
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

    function saludame2(boton) {
      accion = boton;
      var parametros =
      {
        "accion": accion
      };

      $.ajax({
        data: parametros,
        url: 'buscador2.php',
        type: 'POST',

        beforesend: function () {
          $('#mostrar_mensaje').html("Mensaje antes de Enviar");
        },

        success: function (mensaje) {
          $('#mostrar_mensaje').html(mensaje);
        }
      });
    }
    function saludame1(boton) {
      accion = boton;
      var parametros =
      {
        "accion": accion
      };

      $.ajax({
        data: parametros,
        url: 'buscador3.php',
        type: 'POST',

        beforesend: function () {
          $('#mostrar_mensaje').html("Mensaje antes de Enviar");
        },

        success: function (mensaje) {
          $('#mostrar_mensaje').html(mensaje);
        }
      });
    }
    function saludame(boton) {
      accion = boton;
      var parametros =
      {
        "accion": accion
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

    
  </script>
  </form>
</body>

</html>