<?php

require "conexion.php";

if(isset($_POST['noControlsesion']) && isset($_POST['contrasenasesion'])){
  $noControlSesion = $_POST['noControlsesion'];
  $contrasenaSesion = $_POST['contrasenasesion'];

  $coincidencias = mysqli_query($conexion, "SELECT * FROM usuarios WHERE contrasena = '$contrasenaSesion' AND numerocontrol = $noControlSesion");
  
  if(mysqli_num_rows($coincidencias) > 0){

    session_start();

    $asociativo = mysqli_fetch_array($coincidencias);
    $_SESSION['rol'] = $asociativo['tipodeusuario'];
    $_SESSION['id'] = $asociativo['ID'];

    if(isset($_SESSION['rol'])){
      switch($_SESSION['rol']){
        case 1:
          $respuesta = "ADMIN/admin.php";
          echo json_encode($respuesta);
        break;
        case 2:
          $respuesta = "USERS/bienvenidauser.php";
          echo json_encode($respuesta);
        break;
        default:
      }
    }

  }else{
    $respuesta = false;
    echo json_encode($respuesta);
  }
}

?>