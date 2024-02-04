<?php 

require "../CRUD/conexion.php";

$id = $_GET['IDusuario'];
$consulta = mysqli_query($conexion, "SELECT k, v, a FROM usuarios WHERE ID = '$id'");
$resultados = mysqli_fetch_array($consulta);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/consulta.css">
  <title> RESULTADOS </title>
</head> 
<body>

    <div class="container">

        <div class="results">

            <a class="logo"><img src="../IMG/logo.png"></a>

            <div class="text_results">
                <h2> Resultados </h2>
                <p> Visual: <?php echo $resultados['v']; ?> </p>
                <p> Auditivo: <?php echo $resultados['a']; ?> </p>
                <p> Kinestésico: <?php echo $resultados['k']; ?> </p>
            </div>

            <div class="link">
            <a class="regresar" href="bienvenidauser.php"> REGRESAR</a> 
            </div>

        </div>

        <div class="note">
            <p>El estilo de aprendiaje que tenga mayor puntaje será con el que tienes mayor afinidad.</p>
            <p>Si dos o más estilos de aprendizaje tienen el mismo puntaje entonces tienes la misma afinidad en ellos.</p>
        </div>
        
    </div>

</body>
</html>