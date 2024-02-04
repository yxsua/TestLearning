<?php

require '../CRUD/conexion.php';

    if($_POST){

      if(isset($_POST['userToEliminate'])){
        $user = $_POST['userToEliminate'];
        mysqli_query($conexion, "DELETE FROM usuarios WHERE ID = $user");
      }

      if(isset($_POST['usertoEdit'])){
        mysqli_query($conexion, "UPDATE usuarios SET nombre = '$_POST[nombre]', contrasena = '$_POST[contrasena]', numerocontrol = $_POST[ncontrol], grupo = '$_POST[grupo]', k=$_POST[k], v=$_POST[v], a = $_POST[a] WHERE ID = $_POST[usertoEdit]");
      }

      $whereGroup = $_POST['semestre_admin'].$_POST['grupo_admin'];
      $sql = mysqli_query($conexion, "SELECT * FROM usuarios WHERE grupo = '$whereGroup'");

      if(mysqli_num_rows($sql) > 0){
      ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="icon" href="../IMG/logo.png">
          <link rel="stylesheet" href="../CSS/table.css">
          <link rel="stylesheet" href="../CSS/header.css">
          <title><?php echo $whereGroup ?></title>
        </head>
        <body>

          <nav class="nav_black">

            <div class="logo">
              <a href="admin.php"><img src="../IMG/logo.png"></a>
            </div>

          </nav>

          <div class="container">

            <table>

              <thead>
                <tr>
                  <th> ID </th>
                  <th> Nombre </th>
                  <th> Contraseña </th>
                  <th> Número de Control </th>
                  <th> Grupo </th>
                  <th> Kinestesico </th>
                  <th> Visual </th>
                  <th> Auditivo </th>
                  <th> Acciones </th>
                </tr>
              </thead>

              <tbody>
                  <?php while($user = mysqli_fetch_array($sql)){?>

                    <tr>

                      <td><?php echo $user['ID']?></td>
                      <td><?php echo $user['nombre']?></td>
                      <td><?php echo $user['contrasena']?></td>
                      <td><?php echo $user['numerocontrol']?></td>
                      <td><?php echo $user['grupo']?></td>
                      <td><?php echo $user['k']?></td>
                      <td><?php echo $user['v']?></td>
                      <td><?php echo $user['a']?></td>

                      <td>

                        <form action="" method="post">

                          <input type="text" name="semestre_admin" value="<?php echo $_POST['semestre_admin']?>" hidden>
                          <input type="text" name="grupo_admin" value="<?php echo $_POST['grupo_admin']?>" hidden>
                          <input type="number" name="userToEliminate" value ="<?php echo $user['ID']?>" hidden>

                          <input class="button_delete" type="submit" value="ELIMINAR">

                        </form>
                        
                        <form action="editar_admin.php" method="post">

                          <input type="text" name="semestre_admin" value="<?php echo $_POST['semestre_admin']?>" hidden>
                          <input type="text" name="grupo_admin" value="<?php echo $_POST['grupo_admin']?>" hidden>
                          <input type="number" name="userToEdit" value ="<?php echo $user['ID']?>" hidden>

                          <input class="button_update" type="submit" value="EDITAR">

                        </form>
                        
                      </td>

                    </tr>

                  <?php }?>
              </tbody>
              
            </table>

          </div>
        </body>
        </html>

      <?php
      }else{
        echo "NO HAY RESULTADOS";
      }
    }
  
?>
