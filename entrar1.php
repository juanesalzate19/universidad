<?php
include("abrir_conexion.php");
$doc=$_POST ["doc"];
$pass=$_POST ["pass"];
$cargo=$_POST ["cargo"];
$materia=$_POST ["materia"];

$doc1="";
$pass1="";
$cargo1="";
$materia1="";
$user="";


if(isset($_POST ["btn-entrar"])){
        $consult="SELECT * FROM administracion WHERE documento='$doc' AND contraseña='$pass' AND cargo='$cargo' AND id_materia='$materia'";
        $resultado=mysqli_query($conexion,$consult);

        if($doc=="" || $pass==""){
            echo"<script> alert('Campos vacios')</script>";
            header('refresh:0;url=index.php');
            return;
        }
        while($log=mysqli_fetch_assoc($resultado)){
            $doc1=$log['documento'];
            $pass1=$log['contraseña'];
            $cargo1=$log['cargo'];
            $materia1=$log['id_materia'];
        }
        if($doc1==$doc and $pass1==$pass and $cargo1=="Docente" and $materia1=="$materia"){
            echo"<script> alert('Bienvenido docente')</script>";
            header('refresh:0;url=docente.php');
        }else{
            if($doc1==$doc and $pass1==$pass and $cargo1=="Decano"){
                echo "<script> alert('Bienvenido decano')</script>";
                header('refresh:0;url=decano.php');
        }else{
            echo"<script> alert('Datos incorrectos')</script>";
            header('refresh:0;url=index.php');
        }
    }
}
