<?php  

require "conexion.php";

$nombre = $_POST['nombre'] ?? '';
$contrasena = $_POST['contrasena'] ?? '';
$noControl = $_POST['noControl'] ?? '';
$grupo = $_POST['grupo'] ?? 0;
$semestre = $_POST['semestre'] ?? 0;

if($nombre != '' && $contrasena !=  '' && $noControl != '' && $grupo != 0 && $semestre != 0){

  $grupoSemestre = $semestre.$grupo;

  $verificar_nombre = mysqli_query($conexion,"SELECT * FROM usuarios WHERE nombre = '$nombre'");
  $verificar_noControl = mysqli_query($conexion,"SELECT * FROM usuarios WHERE numerocontrol = $noControl");

  if(mysqli_num_rows($verificar_nombre) > 0 || mysqli_num_rows($verificar_noControl) > 0){
    $respuesta = false;
    echo json_encode($respuesta);
  }else{
    $respuesta = true;
    echo json_encode($respuesta);
    $insertar = "INSERT INTO usuarios VALUES ('','$nombre', '$contrasena', '$noControl', '$grupoSemestre',0, 0, 0, '2')";
    $query = mysqli_query($conexion, $insertar);
  }

}else{
  header("Location: ../index.html");
}

?>