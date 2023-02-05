<?php
include("abrir_conexion.php");
$doc="";   
$nom="";
$correo="";
$tel=""; 
$dir="";
$car="";
$sem="";
$estado="";
$pass1="";
if(isset($_POST ["btn-enviar"])){
    $doc=$_POST ["docEST"];
    $nom=$_POST ["nomEST"];
    $tel=$_POST ["telEST"];
    $dir=$_POST ["dirEST"];
    $correo=$_POST ["correoEST"];
    $car=$_POST ["carEST"];
    $sem=$_POST ["semEST"];
    $estado=$_POST ["estadoEST"];
    $pass1=$_POST ["pass1"];
    if($nom=="" || $correo=="" || $doc=="" || $tel==""|| $dir==""||  $pass1==""|| $car=="↓"|| $sem=="↓"|| $estado=="↓"){ 
    }else{
        $res= $conexion ->prepare("insert into alumno(documento_est,nombre_est,telefono_est,direccion_est,correo_est,carrera,semestre,estado_est,contraseña)values(?,?,?,?,?,?,?,?,?)");
            $res->bind_param("issssssss",$doc,$nom,$tel,$dir,$correo,$car,$sem,$estado,$pass1);
            $res->execute();
        }
    }

   include("abrir_conexion.php");
       $doc="";   
       $nom="";
       $car="";
       $sem="";
       $nota1="";
       $nota2="";
       $prom="";
           if(isset($_POST ["btn-enviar"])){
               $doc=$_POST ["docEST"];
               $nom=$_POST ["nomEST"];
               $car=$_POST ["carEST"];
               $sem=$_POST ["semEST"];
               if($doc=="" || $nom=="" || $car=="" ||  $sem==""){
                echo "<script> alert('CAMPOS OBLIGATORIOS');</script>";
                header('refresh:0;url=registroEstudiantes.php');
                return;
            }else{
                if($car=="Ingeniería en Sistemas" && $sem=="1"){
                  $materia="1";
                   $res= $conexion ->prepare("insert into calificaciones(documento_est,nombre,carrera,semestre,id_materia,nota1,nota2,promedio)values(?,?,?,?,?,?,?,?)");
                       $res->bind_param("isssiddd",$doc,$nom,$car,$sem,$materia,$nota1,$nota2,$prom);
                       $res->execute();
                       echo "<script> alert('¡Los datos se han guardado!');</script>";
                       header('refresh:0;url=registroEstudiantes.php');
                   }else{
                    if($car=="Ingeniería en Sistemas" && $sem=="2"){
                        $materia="3";
                         $res= $conexion ->prepare("insert into calificaciones(documento_est,nombre,carrera,semestre,id_materia,nota1,nota2,promedio)values(?,?,?,?,?,?,?,?)");
                             $res->bind_param("isssiddd",$doc,$nom,$car,$sem,$materia,$nota1,$nota2,$prom);
                             $res->execute();
                             echo "<script> alert('¡Los datos se han guardado!');</script>";
                             header('refresh:0;url=registroEstudiantes.php');
                           
               }
            }
        }
    }

    include("abrir_conexion.php");
    $doc="";   
    $nom="";
    $car="";
    $sem="";
    $nota1="";
    $nota2="";
    $prom="";
        if(isset($_POST ["btn-enviar"])){
            $doc=$_POST ["docEST"];
            $nom=$_POST ["nomEST"];
            $car=$_POST ["carEST"];
            $sem=$_POST ["semEST"];
            if($doc=="" || $nom=="" || $car=="" ||  $sem==""){
             echo "<script> alert('CAMPOS OBLIGATORIOS');</script>";
             header('refresh:0;url=registroEstudiantes.php');
             return;
         }else{
             if($car=="Ingeniería en mecatronica" && $sem=="1"){
               $materia="5";
                $res= $conexion ->prepare("insert into calificaciones(documento_est,nombre,carrera,semestre,id_materia,nota1,nota2,promedio)values(?,?,?,?,?,?,?,?)");
                    $res->bind_param("isssiddd",$doc,$nom,$car,$sem,$materia,$nota1,$nota2,$prom);
                    $res->execute();
                    echo "<script> alert('¡Los datos se han guardado!');</script>";
                    header('refresh:0;url=registroEstudiantes.php');
                }else{
                 if($car=="Ingeniería en mecatronica" && $sem=="2"){
                     $materia="7";
                      $res= $conexion ->prepare("insert into calificaciones(documento_est,nombre,carrera,semestre,id_materia,nota1,nota2,promedio)values(?,?,?,?,?,?,?,?)");
                          $res->bind_param("isssiddd",$doc,$nom,$car,$sem,$materia,$nota1,$nota2,$prom);
                          $res->execute();
                          echo "<script> alert('¡Los datos se han guardado!');</script>";
                          header('refresh:0;url=registroEstudiantes.php');
                        
            }
         }
     }
 }
 include("abrir_conexion.php");
 $doc="";   
 $nom="";
 $car="";
 $sem="";
 $nota1="";
 $nota2="";
 $prom="";
     if(isset($_POST ["btn-enviar"])){
         $doc=$_POST ["docEST"];
         $nom=$_POST ["nomEST"];
         $car=$_POST ["carEST"];
         $sem=$_POST ["semEST"];
         if($doc=="" || $nom=="" || $car=="" ||  $sem==""){
          echo "<script> alert('CAMPOS OBLIGATORIOS');</script>";
          header('refresh:0;url=registroEstudiantes.php');
          return;
      }else{
          if($car=="diseño grafico" && $sem=="1"){
            $materia="9";
             $res= $conexion ->prepare("insert into calificaciones(documento_est,nombre,carrera,semestre,id_materia,nota1,nota2,promedio)values(?,?,?,?,?,?,?,?)");
                 $res->bind_param("isssiddd",$doc,$nom,$car,$sem,$materia,$nota1,$nota2,$prom);
                 $res->execute();
                 echo "<script> alert('¡Los datos se han guardado!');</script>";
                 header('refresh:0;url=registroEstudiantes.php');
             }else{
              if($car=="diseño grafico" && $sem=="2"){
                  $materia="11";
                   $res= $conexion ->prepare("insert into calificaciones(documento_est,nombre,carrera,semestre,id_materia,nota1,nota2,promedio)values(?,?,?,?,?,?,?,?)");
                       $res->bind_param("isssiddd",$doc,$nom,$car,$sem,$materia,$nota1,$nota2,$prom);
                       $res->execute();
                       echo "<script> alert('¡Los datos se han guardado!');</script>";
                       header('refresh:0;url=registroEstudiantes.php');
                     
         }
      }
  }
}

include("abrir_conexion.php");
$doc="";   
$nom="";
$car="";
$sem="";
$nota1="";
$nota2="";
$prom="";
    if(isset($_POST ["btn-enviar"])){
        $doc=$_POST ["docEST"];
        $nom=$_POST ["nomEST"];
        $car=$_POST ["carEST"];
        $sem=$_POST ["semEST"];
        if($doc=="" || $nom=="" || $car=="" ||  $sem==""){
         echo "<script> alert('CAMPOS OBLIGATORIOS');</script>";
         header('refresh:0;url=registroEstudiantes.php');
         return;
     }else{
         if($car=="licenciatura en diseño" && $sem=="1"){
           $materia="13";
            $res= $conexion ->prepare("insert into calificaciones(documento_est,nombre,carrera,semestre,id_materia,nota1,nota2,promedio)values(?,?,?,?,?,?,?,?)");
                $res->bind_param("isssiddd",$doc,$nom,$car,$sem,$materia,$nota1,$nota2,$prom);
                $res->execute();
                echo "<script> alert('¡Los datos se han guardado!');</script>";
                header('refresh:0;url=registroEstudiantes.php');
            }else{
             if($car=="licenciatura en diseño" && $sem=="2"){
                 $materia="15";
                  $res= $conexion ->prepare("insert into calificaciones(documento_est,nombre,carrera,semestre,id_materia,nota1,nota2,promedio)values(?,?,?,?,?,?,?,?)");
                      $res->bind_param("isssiddd",$doc,$nom,$car,$sem,$materia,$nota1,$nota2,$prom);
                      $res->execute();
                      echo "<script> alert('¡Los datos se han guardado!');</script>";
                      header('refresh:0;url=registroEstudiantes.php');
                    
        }
     }
 }
}
include("abrir_conexion.php");
$doc="";   
$nom="";
$car="";
$sem="";
$nota1="";
$nota2="";
$prom="";
    if(isset($_POST ["btn-enviar"])){
        $doc=$_POST ["docEST"];
        $nom=$_POST ["nomEST"];
        $car=$_POST ["carEST"];
        $sem=$_POST ["semEST"];
        if($doc=="" || $nom=="" || $car=="" ||  $sem==""){
         echo "<script> alert('CAMPOS OBLIGATORIOS');</script>";
         header('refresh:0;url=registroEstudiantes.php');
         return;
     }else{
         if($car=="Administración en Recursos Humanos" && $sem=="1"){
           $materia="17";
            $res= $conexion ->prepare("insert into calificaciones(documento_est,nombre,carrera,semestre,id_materia,nota1,nota2,promedio)values(?,?,?,?,?,?,?,?)");
                $res->bind_param("isssiddd",$doc,$nom,$car,$sem,$materia,$nota1,$nota2,$prom);
                $res->execute();
                echo "<script> alert('¡Los datos se han guardado!');</script>";
                header('refresh:0;url=registroEstudiantes.php');
            }else{
             if($car=="Administración en Recursos Humanos" && $sem=="2"){
                 $materia="19";
                  $res= $conexion ->prepare("insert into calificaciones(documento_est,nombre,carrera,semestre,id_materia,nota1,nota2,promedio)values(?,?,?,?,?,?,?,?)");
                      $res->bind_param("isssiddd",$doc,$nom,$car,$sem,$materia,$nota1,$nota2,$prom);
                      $res->execute();
                      echo "<script> alert('¡Los datos se han guardado!');</script>";
                      header('refresh:0;url=registroEstudiantes.php');
                    
        }
     }
 }
}
include("abrir_conexion.php");
$doc="";   
$nom="";
$car="";
$sem="";
$nota1="";
$nota2="";
$prom="";
    if(isset($_POST ["btn-enviar"])){
        $doc=$_POST ["docEST"];
        $nom=$_POST ["nomEST"];
        $car=$_POST ["carEST"];
        $sem=$_POST ["semEST"];
        if($doc=="" || $nom=="" || $car=="" ||  $sem==""){
         echo "<script> alert('CAMPOS OBLIGATORIOS');</script>";
         header('refresh:0;url=registroEstudiantes.php');
         return;
     }else{
         if($car=="Administración en Salud Ocupacional" && $sem=="1"){
           $materia="21";
            $res= $conexion ->prepare("insert into calificaciones(documento_est,nombre,carrera,semestre,id_materia,nota1,nota2,promedio)values(?,?,?,?,?,?,?,?)");
                $res->bind_param("isssiddd",$doc,$nom,$car,$sem,$materia,$nota1,$nota2,$prom);
                $res->execute();
                echo "<script> alert('¡Los datos se han guardado!');</script>";
                header('refresh:0;url=registroEstudiantes.php');
            }else{
             if($car=="Administración en Salud Ocupacional" && $sem=="2"){
                 $materia="23";
                  $res= $conexion ->prepare("insert into calificaciones(documento_est,nombre,carrera,semestre,id_materia,nota1,nota2,promedio)values(?,?,?,?,?,?,?,?)");
                      $res->bind_param("isssiddd",$doc,$nom,$car,$sem,$materia,$nota1,$nota2,$prom);
                      $res->execute();
                      echo "<script> alert('¡Los datos se han guardado!');</script>";
                      header('refresh:0;url=registroEstudiantes.php');
                    
        }
     }
 }
}
    
