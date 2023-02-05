
<?php
$host="127.0.0.1";
$usuario="root";
$pass="";
$base_datos="universidad";


$conexion=new mysqli($host,$usuario,$pass,$base_datos);
if($conexion->connect_error){
    echo"error en conexion";
    exit();
}
?>

