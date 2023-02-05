<?php
    include('abrir_conexion.php');

    echo 
    '
        <table class="table table-hover" style="color:white;">
        <tr>
          <th scope="col">#</th>
          <th scope="col">DOCUMENTO</th>
          <th scope="col">NOMBRE</th>
          <th scope="col">CARRERA</th>
          <th scope="col">SEMESTRE</th>
          <th scope="col">MATERIA</th>
          <th scope="col">NOTA 1</th>
          <th scope="col">NOTA 2</th>
          <th scope="col">PROMEDI0</th>
          <th scope="col">MODIFICAR NOTAS</th>
        </tr>
    ';
    $accion = $_POST['accion']  ;

    if($accion == 4 || (isset($_POST["btn-inter"])) )
    {
        $mi_busqueda = $_POST['mi_busqueda'];
        $resultados = mysqli_query($conexion,"SELECT * FROM calificaciones WHERE nombre LIKE '%$mi_busqueda%' ");
      while($consulta = mysqli_fetch_array($resultados))
      {
        echo 
        '
            <tr>
            <td>'.$consulta['codigo_cali'].'</td>
            <td>'.$consulta['documento_est'].'</td>
            <td>'.$consulta['nombre'].'</td>
            <td>'.$consulta['carrera'].'</td>
            <td>'.$consulta['semestre'].'</td>
            <td>'.$consulta['id_materia'].'</td>
            <td>'.$consulta['nota1'].'</td>
            <td>'.$consulta['nota2'].'</td>
            <td>'.$consulta['promedio'].'</td>
              <td><a href="eliminar.php?codigo_cali='.$consulta['codigo_cali'].'"><button type="button" class="btn btn-outline-danger" onclick = "return confirmar()">ELIMINAR</button></a></td>
        <td><a href="actualizar3.php?codigo_cali='.$consulta['codigo_cali'].'"><button type="button" class="btn btn-outline-primary">ACTUALIZAR</button></a></td>
            </tr>
        ';
      } 

    }else{

    if($accion == 4 || (isset($_POST["btn-cal"])) )
    {
        $mi_busqueda = $_POST['mi_busqueda'];
        $resultados = mysqli_query($conexion,"SELECT * FROM calificaciones WHERE nombre LIKE '%$mi_busqueda%' and  WHERE promedio>=3  ");
      while($consulta = mysqli_fetch_array($resultados))
      {
        echo 
        '
            <tr>
            <td>'.$consulta['codigo_cali'].'</td>
            <td>'.$consulta['documento_est'].'</td>
            <td>'.$consulta['nombre'].'</td>
            <td>'.$consulta['carrera'].'</td>
            <td>'.$consulta['semestre'].'</td>
            <td>'.$consulta['id_materia'].'</td>
            <td>'.$consulta['nota1'].'</td>
            <td>'.$consulta['nota2'].'</td>
            <td>'.$consulta['promedio'].'</td>
              <td><a href="eliminar.php?codigo_cali='.$consulta['codigo_cali'].'"><button type="button" class="btn btn-outline-danger" onclick = "return confirmar()">ELIMINAR</button></a></td>
        <td><a href="actualizar3.php?codigo_cali='.$consulta['codigo_cali'].'"><button type="button" class="btn btn-outline-primary">ACTUALIZAR</button></a></td>
            </tr>
        ';
      } 

    }
else{
    if($accion == 4 || (isset($_POST["btn-pre"])) )
    {
        $mi_busqueda = $_POST['mi_busqueda'];
        $resultados = mysqli_query($conexion,"SELECT * FROM calificaciones WHERE nombre LIKE '%$mi_busqueda%'and  WHERE promedio<=2,9  ");
      while($consulta = mysqli_fetch_array($resultados))
      {
        echo 
        '
        <tr>
        <td>'.$consulta['codigo_cali'].'</td>
        <td>'.$consulta['documento_est'].'</td>
        <td>'.$consulta['nombre'].'</td>
        <td>'.$consulta['carrera'].'</td>
        <td>'.$consulta['semestre'].'</td>
        <td>'.$consulta['id_materia'].'</td>
        <td>'.$consulta['nota1'].'</td>
        <td>'.$consulta['nota2'].'</td>
        <td>'.$consulta['promedio'].'</td>
    <td><a href="actualizar3.php?codigo_cali='.$consulta['codigo_cali'].'"><button type="button" class="btn btn-outline-primary">ACTUALIZAR</button></a></td>
        </tr>
    ';
      } 

    }
    else
    {
        if($accion == 1){
            
            $resultados = mysqli_query($conexion,"SELECT * FROM calificaciones");
            while($consulta = mysqli_fetch_array($resultados))
            {
              echo 
              '
              <tr>
              <td>'.$consulta['codigo_cali'].'</td>
              <td>'.$consulta['documento_est'].'</td>
              <td>'.$consulta['nombre'].'</td>
              <td>'.$consulta['carrera'].'</td>
              <td>'.$consulta['semestre'].'</td>
              <td>'.$consulta['id_materia'].'</td>
              <td>'.$consulta['nota1'].'</td>
              <td>'.$consulta['nota2'].'</td>
              <td>'.$consulta['promedio'].'</td>
              <td><a href="actualizar3.php?codigo_cali='.$consulta['codigo_cali'].'"><button type="button" class="btn btn-outline-primary">MODIFICAR</button></a></td>
          </tr>
              ';
            }   
        }
        if($accion == 2){
            $resultados = mysqli_query($conexion,"SELECT * FROM calificaciones WHERE promedio>=3");
            while($consulta = mysqli_fetch_array($resultados))
            {
              echo 
              '
              <tr>
              <td>'.$consulta['codigo_cali'].'</td>
              <td>'.$consulta['documento_est'].'</td>
              <td>'.$consulta['nombre'].'</td>
              <td>'.$consulta['carrera'].'</td>
              <td>'.$consulta['semestre'].'</td>
              <td>'.$consulta['id_materia'].'</td>
              <td>'.$consulta['nota1'].'</td>
              <td>'.$consulta['nota2'].'</td>
              <td>'.$consulta['promedio'].'</td>
              <td><a href="actualizar3.php?codigo_cali='.$consulta['codigo_cali'].'"><button type="button" class="btn btn-outline-primary">MODIFICAR</button></a></td>
          </tr>
              ';
            }   
        }
        }
        if($accion == 3){
            $resultados = mysqli_query($conexion,"SELECT * FROM calificaciones WHERE promedio<3");
            while($consulta = mysqli_fetch_array($resultados))
            {
              echo 
              '
              <tr>
              <td>'.$consulta['codigo_cali'].'</td>
              <td>'.$consulta['documento_est'].'</td>
              <td>'.$consulta['nombre'].'</td>
              <td>'.$consulta['carrera'].'</td>
              <td>'.$consulta['semestre'].'</td>
              <td>'.$consulta['id_materia'].'</td>
              <td>'.$consulta['nota1'].'</td>
              <td>'.$consulta['nota2'].'</td>
              <td>'.$consulta['promedio'].'</td>
              <td><a href="actualizar3.php?codigo_cali='.$consulta['codigo_cali'].'"><button type="button" class="btn btn-outline-primary">MODIFICAR</button></a></td>
          </tr>
              ';
            }   
        }
    }
}
  echo '</table>';
?>   
