<?php
    $id=$_GET['documento_est'];
    include_once 'abrir_conexion.php';

    $sql="DELETE calificaciones FROM  JOIN alumno on calificaciones.documento_est = alumno.documento_est WHERE documento_est= $id";
    $query=mysqli_query($conexion,$sql);
    if($query){
        header("refresh:0;url=index.php");
    }else{
        echo "Error al eliminar";
    }
    
?>