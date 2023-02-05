<?php
include("abrir_conexion.php");
$doc=$_POST ["doc"];
$pass=$_POST ["pass"];

$doc1="";
$pass1="";
$user="";


if(isset($_POST ["btn-entrar"])){
        $consult="SELECT * FROM alumno WHERE documento_est='$doc' AND contraseña='$pass'";
        $resultado=mysqli_query($conexion,$consult);

        if($doc=="" || $pass==""){
            echo"<script> alert('Campos vacios')</script>";
            header('refresh:0;url=index.php');
            return;
        }
        while($log=mysqli_fetch_assoc($resultado)){
            $doc1=$log['documento_est'];
            $pass1=$log['contraseña'];
        }
        if($doc1==$doc and $pass1==$pass){
            echo"<script> alert('Sesion iniciada')</script>";
            header('refresh:0;url=estudiantes.php?documento_est='.$doc1['documento_est'].'');
        }else{
            if($user == 'admin' and $pass == '123'){
                echo "<script> alert('Bienvenido administrador')</script>";
                header('refresh:0;url=admin.php');
        }else{
            echo"<script> alert('Datos incorrectos')</script>";
            header('refresh:0;url=index.php');
        }
    }
}
