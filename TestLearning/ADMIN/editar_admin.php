<?php

require '../CRUD/conexion.php';

$userEdit = mysqli_query($conexion, "SELECT * FROM usuarios WHERE ID = $_POST[userToEdit]");
$userEdit = mysqli_fetch_array($userEdit);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../IMG/logo.png">
  <link rel="stylesheet" href="../CSS/actualizar.css">
  <link rel="stylesheet" href="../CSS/header.css">
  <title> EDITAR  | <?php echo $userEdit['nombre'] ?> </title>
</head>
<body>

  <nav class="nav_black">

    <div class="logo">
      <a href="admin.php"><img src="../IMG/logo.png"></a>
    </div>

  </nav>

  <div class="content_actualizar">

    <div class="form">

      <form class="form_Actualizar" action="grupos.php" method="post">

        <input type="text" name="semestre_admin" value="<?php echo $_POST['semestre_admin']?>" hidden>
        <input type="text" name="grupo_admin" value="<?php echo $_POST['grupo_admin']?>" hidden>
        <input type="number" name="usertoEdit" value="<?php echo $userEdit['ID']?>" placeholder="ID" hidden>
        <input type="number" value="<?php echo $userEdit['ID']?>" placeholder="ID" disabled>
        <input type="text" name="nombre" value="<?php echo $userEdit['nombre']?>" placeholder="Nombre">
        <input type="text" name="contrasena" value="<?php echo $userEdit['contrasena']?>" placeholder="Contraseña">
        <input type="number" name="ncontrol" value="<?php echo $userEdit['numerocontrol']?>" placeholder="Número de Control">
        <input type="text" name="grupo" value="<?php echo $userEdit['grupo']?>" placeholder="Grupo">
        <input type="number" name="k" value="<?php echo $userEdit['k']?>" placeholder="Kinestesico">
        <input type="number" name="v" value="<?php echo $userEdit['v']?>" placeholder="Visual">
        <input type="number" name="a" value="<?php echo $userEdit['a']?>" placeholder="Auditivo">

        <input type="submit" value="Enviar">
        <input type="submit" value="Cancelar">

      </form>

    </div>

  </div>
  
</body>
</html>