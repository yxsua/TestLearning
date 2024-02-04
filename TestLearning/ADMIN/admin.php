<?php

require "../CRUD/conexion.php";

session_start();

if(!isset($_SESSION['rol'])){
  header('location: ../index.html');
}else{
  if($_SESSION['rol'] != 1){
    header('location: ../index.html');
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../IMG/logo.png">
  <link rel="stylesheet" href="../CSS/admin.css">
  <title> ADMIN | TestLearning </title>
</head>
<body>

  <!-- NAVEGACIÓN ADMIN -->
  
  <nav class="nav_admin">
    <h1> A D M I N </h1>
    <ul>
      <li>
        <a class="cerrar_sesion" href="../CRUD/cerrarSesion.php"> Cerrar Sesión </a>
      </li>
    </ul>
  </nav>

   <section>

    <form action="grupos.php" method="POST">

      <select name="grupo_admin" id="grupo_admin">
        <option value="0"> Grupo </option>
        <option value="TPROG - AMBI"> PROGRAMACIÓN </option>
        <option value="TMANTI - AMBI"> MANTENIMIENTO INDUSTRIAL </option>
        <option value="TMECA - AMBI"> MECTRÓNICA </option>
      </select>

      <select name="semestre_admin" id="semestre_admin">
        <option value="0"> Semestre </option>
        <option value="1"> 1</option>
        <option value="2"> 2</option>
        <option value="3"> 3</option>
        <option value="4"> 4</option>
        <option value="5"> 5</option>
        <option value="6"> 6</option>
      </select>

      <input type="submit" value="ENVIAR">

    </form>

  </section>

  <script src="../JS/grupos.js"></script>

</body>
</html>