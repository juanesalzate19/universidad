<?php
	include('abrir_conexion.php');

	echo 
	'
		<table class="table table-hover text-center" style="color:white;">
	    <tr>
	      
	    </tr>
	';
	$accion = $_POST['accion']	;

	if($accion == 4 || (isset($_POST["btn-notas"])) )
	{
		$mi_busqueda = $_POST['mi_busqueda'];
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
	
	if($accion == 4 || (isset($_POST["btn-cant"])) )
	{
		$mi_busqueda = $_POST['mi_busqueda'];
		$resultados = mysqli_query($conexion,"SELECT COUNT(documento_est)documento_est,carrera FROM alumno GROUP BY carrera;");
			while($consulta = mysqli_fetch_array($resultados))
			{
			  echo 
			  '
			  <td>'.$consulta['documento_est'].'</td>
			  
			  <td>'.$consulta['carrera'].'</td>

			  ';
	  }	

	}
	if($accion == 4 || (isset($_POST["btn-est"])) )
	{
		$mi_busqueda = $_POST['mi_busqueda'];
		$resultados = mysqli_query($conexion,"SELECT documento_est,nombre_est,correo_est,estado_est,carrera FROM alumno ");
		while($consulta = mysqli_fetch_array($resultados))
		{
		  echo 
		  '
		  <tr>
		  <td>'.$consulta['documento_est'].'</td>
		  <td>'.$consulta['nombre_est'].'</td>
		  <td>'.$consulta['correo_est'].'</td>
		  <td>'.$consulta['carrera'].'</td>
		  <td>'.$consulta['estado_est'].'</td>
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
			$resultados = mysqli_query($conexion,"SELECT COUNT(documento_est)documento_est,carrera FROM alumno GROUP BY carrera;");
			while($consulta = mysqli_fetch_array($resultados))
			{
			  echo 
			  '
			  <td>'.$consulta['documento_est'].'</td>
			  
			  <td>'.$consulta['carrera'].'</td>

			  ';
			}	
		}
		}
		if($accion == 3){
			$resultados = mysqli_query($conexion,"SELECT documento_est,nombre_est,correo_est,estado_est,carrera FROM alumno ");
			while($consulta = mysqli_fetch_array($resultados))
			{
			  echo 
			  '
			  <tr>
			  <td>'.$consulta['documento_est'].'</td>
			  <td>'.$consulta['nombre_est'].'</td>
			  <td>'.$consulta['correo_est'].'</td>
			  <td>'.$consulta['carrera'].'</td>
			  <td>'.$consulta['estado_est'].'</td>
		  </tr>
			  ';
			}	
		}
  echo '</table>';
?>