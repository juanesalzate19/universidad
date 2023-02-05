
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
		  <th scope="col">MATERIA</th>
		  <th scope="col">SEMESTRE</th>
		  <th scope="col">NOTA 1</th>
		  <th scope="col">NOTA 2</th>
		  <th scope="col">PROMEDIO</th>
	    </tr>
	';
	$accion = $_POST['accion']	;

	if($accion == 4 || (isset($_POST["btn-inter"])) )
	{
		$mi_busqueda = $_POST['mi_busqueda'];
		$resultados = mysqli_query($conexion,"SELECT * FROM $tabla1 WHERE nombre LIKE '%$mi_busqueda%' ");
	  while($consulta = mysqli_fetch_array($resultados))
	  {
	    echo 
	    '
			<tr>
			<td>'.$consulta['id'].'</td>
			<td>'.$consulta['nombre'].'</td>
			<td>'.$consulta['provedor'].'</td>
			<td>'.$consulta['unitario'].'</td>
			<td>'.$consulta['categoria'].'</td>
			<td>'.$consulta['NOTA_1'].'</td>
			<td>'.$consulta['NOTA_2'].'</td>
			<td>'.$consulta['PROMEDIO'].'</td>
			  <td><a href="eliminar.php?id='.$consulta['id'].'"><button type="button" class="btn btn-outline-danger" onclick = "return confirmar()">ELIMINAR</button></a></td>
        <td><a href="actualizar3.php?id='.$consulta['id'].'"><button type="button" class="btn btn-outline-primary">ACTUALIZAR</button></a></td>
		    </tr>
	    ';
	  }	

	}
	if($accion == 4 || (isset($_POST["btn-cal"])) )
	{
		$mi_busqueda = $_POST['mi_busqueda'];
		$resultados = mysqli_query($conexion,"SELECT * FROM $tabla2 WHERE nombre LIKE '%$mi_busqueda%' ");
	  while($consulta = mysqli_fetch_array($resultados))
	  {
	    echo 
	    '
			<tr>
			<td>'.$consulta['id'].'</td>
			<td>'.$consulta['nombre'].'</td>
			<td>'.$consulta['provedor'].'</td>
			<td>'.$consulta['unitario'].'</td>
			<td>'.$consulta['categoria'].'</td>
			<td><a href="eliminar.php?id2='.$consulta['id'].'"><button type="button" class="btn btn-outline-danger" onclick = "return confirmar()">ELIMINAR</button></a></td>
            <td><a href="calzado_ac.php?id='.$consulta['id'].'"><button type="button" class="btn btn-outline-primary">ACTUALIZAR</button></a></td>
		    </tr>
	    ';
	  }	

	}
	if($accion == 4 || (isset($_POST["btn-pre"])) )
	{
		$mi_busqueda = $_POST['mi_busqueda'];
		$resultados = mysqli_query($conexion,"SELECT * FROM $tabla3 WHERE nombre LIKE '%$mi_busqueda%' ");
	  while($consulta = mysqli_fetch_array($resultados))
	  {
	    echo 
	    '
			<tr>
			<td>'.$consulta['id'].'</td>
			<td>'.$consulta['nombre'].'</td>
			<td>'.$consulta['provedor'].'</td>
			<td>'.$consulta['unitario'].'</td>
			<td>'.$consulta['categoria'].'</td>
			<td><a href="eliminar.php?id3='.$consulta['id'].'"><button type="button" class="btn btn-outline-danger" onclick = "return confirmar()">ELIMINAR</button></a></td>
      <td><a href="actualizar.php?id='.$consulta['id'].'"><button type="button" class="btn btn-outline-primary">ACTUALIZAR</button></a></td>
		    </tr>
	    ';
	  }	

	}
	else
	{
		if($accion == 1){
			
			$resultados = mysqli_query($conexion,"SELECT * FROM calificaciones ");
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
			 
		  </tr>
			  ';
			}	
		}
  echo '</table>';
?>   