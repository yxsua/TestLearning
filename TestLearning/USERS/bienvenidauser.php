<?php

require "../CRUD/conexion.php";

session_start();

if(!isset($_SESSION['rol'])){
  header('location: ../index.html');
}else{
  if($_SESSION['rol'] != 2){
    header('location: ../index.html');
  }
}

$iduser = $_SESSION['id'];

$sql = mysqli_query($conexion, "SELECT * FROM usuarios WHERE ID = $iduser");
$info = mysqli_fetch_assoc($sql);


$_SESSION['name'] = $info['nombre'];
$_SESSION['noControl'] = $info['numerocontrol'];

//VERIFICAR SI YA HIZO EL TEST

$verificar = mysqli_fetch_assoc(mysqli_query($conexion, "SELECT k, v, a FROM usuarios WHERE ID = $iduser"));

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../IMG/logo.png">
  <link rel="stylesheet" href="../CSS/user.css">
  <title> TestLearning | <?php echo $_SESSION['name']?> </title>
</head>
<body>

  <section>

    <!-- BARRA DE NAVEGACIÓN -->
    <div class="nav">
      <a><img class="img" src="../IMG/logo.png" alt=""></a>
      <ul>
        <li><a href="../CRUD/cerrarsesion.php"> Cerrar Sesión </a></li>
      </ul>
    </div>

    <!-- INFORMACIÓN DE USUARIO -->
    <div class="information">

      <div class="user_information">
        <h1> <?php echo "Bienvenido <br> ".$_SESSION['name'];?> </h1>
      </div>

      <div class="buttons_test">

        <?php
        if($verificar['k'] != 0 && $verificar['v'] != 0 && $verificar['a'] != 0 ){
        ?>
          <!-- Consuktar resultados -->
          <a class="consulta_test" href="consultaresultados.php?IDusuario=<?php echo $iduser; ?>"> Resultados </a>
        <?php
        }else{
        ?>
          <!-- Inicio del test -->
          <a class="inicio_test"href="testaprendizaje.php?IDusuario=<?php echo $iduser; ?>"> Iniciar el test </a>
        <?php
        }
        ?>

      </div>

    </div>

  </section>
</body>
</html>