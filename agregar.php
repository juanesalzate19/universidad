<?php 
$doc = $_GET['documento_est'];
$nom = $_GET['nombre'];
$car = $_GET['carrera'];
$sem = $_GET['semestre'];
$mat = $_GET['id_materia'];
$not1 = $_GET['nota1'];
$not2 = $_GET['nota2'];
$prom = ($not1+$not2)/2;

include ('abrir_conexion.php');
$sql="UPDATE calificaciones SET documento_est='$doc',
nombre='$nom',carrera='$car',semestre='$sem',id_materia='$mat',nota1='$not1',
nota2='$not2',promedio='$prom' WHERE documento_est='$doc'";
$query=mysqli_query($conexion,$sql);
if($query){
    header("refresh:0;url=docente.php");

}else{
    echo "ERROR AL ACTUALIZAR";
}
?>