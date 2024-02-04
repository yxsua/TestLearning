<?php 

require "../CRUD/conexion.php";
  
$iduser = $_POST['pID'];
$a = 0; //visual
$b = 0; //auditivo
$c = 0; //kinestésico

$pregunta1 = $_POST['p1'];
if ($pregunta1 == 'a') $b++;
if ($pregunta1 == 'b') $a++;
if ($pregunta1 == 'c') $c++;

$pregunta2 = $_POST['p2'];
if ($pregunta2 == 'a') $a++;
if ($pregunta2 == 'b') $c++;
if ($pregunta2 == 'c') $b++;

$pregunta3 = $_POST['p3'];
if ($pregunta3 == 'a') $b++;
if ($pregunta3 == 'b') $a++;
if ($pregunta3 == 'c') $c++;

$pregunta4 = $_POST['p4'];
if ($pregunta4 == 'a') $c++;
if ($pregunta4 == 'b') $b++;
if ($pregunta4 == 'c') $a++;

$pregunta5 = $_POST['p5'];
if ($pregunta5 == 'a') $c++;
if ($pregunta5 == 'b') $b++;
if ($pregunta5 == 'c') $a++;

$pregunta6 = $_POST['p6'];
if ($pregunta6 == 'a') $b++;
if ($pregunta6 == 'b') $a++;
if ($pregunta6 == 'c') $c++;

$pregunta7 = $_POST['p7'];
if ($pregunta7 == 'a') $a++;
if ($pregunta7 == 'b') $b++;
if ($pregunta7 == 'c') $c++;

$pregunta8 = $_POST['p8'];
if ($pregunta8 == 'a') $b++;
if ($pregunta8 == 'b') $a++;
if ($pregunta8 == 'c') $c++;

$pregunta9 = $_POST['p9'];
if ($pregunta9 == 'a') $a++;
if ($pregunta9 == 'b') $c++;
if ($pregunta9 == 'c') $b++;

$pregunta10 = $_POST['p10'];
if ($pregunta10 == 'a') $c++;
if ($pregunta10 == 'b') $b++;
if ($pregunta10 == 'c') $a++;

$pregunta11 = $_POST['p11'];
if ($pregunta11 == 'a') $b++;
if ($pregunta11 == 'b') $a++;
if ($pregunta11 == 'c') $c++;

$pregunta12 = $_POST['p12'];
if ($pregunta12 == 'a') $c++;
if ($pregunta12 == 'b') $a++;
if ($pregunta12 == 'c') $b++;

$pregunta13 = $_POST['p13'];
if ($pregunta13 == 'a') $b++;
if ($pregunta13 == 'b') $c++;
if ($pregunta13 == 'c') $a++;

$pregunta14 = $_POST['p14'];
if ($pregunta14 == 'a') $a++;
if ($pregunta14 == 'b') $b++;
if ($pregunta14 == 'c') $c++;

$pregunta15 = $_POST['p15'];
if ($pregunta15 == 'a') $b++;
if ($pregunta15 == 'b') $a++;
if ($pregunta15 == 'c') $c++;

$pregunta16 = $_POST['p16'];
if ($pregunta16 == 'a') $a++;
if ($pregunta16 == 'b') $c++;
if ($pregunta16 == 'c') $b++;

$pregunta17 = $_POST['p17'];
if ($pregunta17 == 'a') $c++;
if ($pregunta17 == 'b') $b++;
if ($pregunta17 == 'c') $a++;

$pregunta18 = $_POST['p18'];
if ($pregunta18 == 'a') $b++;
if ($pregunta18 == 'b') $c++;
if ($pregunta18 == 'c') $a++;

$pregunta19 = $_POST['p19'];
if ($pregunta19 == 'a') $a++;
if ($pregunta19 == 'b') $b++;
if ($pregunta19 == 'c') $c++;

$pregunta20 = $_POST['p20'];
if ($pregunta20 == 'a') $a++;
if ($pregunta20 == 'b') $c++;
if ($pregunta20 == 'c') $b++;

$pregunta21 = $_POST['p21'];
if ($pregunta21 == 'a') $c++;
if ($pregunta21 == 'b') $a++;
if ($pregunta21 == 'c') $b++;

$pregunta22 = $_POST['p22'];
if ($pregunta22 == 'a') $b++;
if ($pregunta22 == 'b') $c++;
if ($pregunta22 == 'c') $a++;

$pregunta23 = $_POST['p23'];
if ($pregunta23 == 'a') $a++;
if ($pregunta23 == 'b') $b++;
if ($pregunta23 == 'c') $c++;

$pregunta24 = $_POST['p24'];
if ($pregunta24 == 'a') $b++;
if ($pregunta24 == 'b') $a++;
if ($pregunta24 == 'c') $c++;

$pregunta25 = $_POST['p25'];
if ($pregunta25 == 'a') $a++;
if ($pregunta25 == 'b') $b++;
if ($pregunta25 == 'c') $c++;

$pregunta26 = $_POST['p26'];
if ($pregunta26 == 'a') $c++;
if ($pregunta26 == 'b') $b++;
if ($pregunta26 == 'c') $a++;

$pregunta27 = $_POST['p27'];
if ($pregunta27 == 'a') $b++;
if ($pregunta27 == 'b') $a++;
if ($pregunta27 == 'c') $c++;

$pregunta28 = $_POST['p28'];
if ($pregunta28 == 'a') $c++;
if ($pregunta28 == 'b') $b++;
if ($pregunta28 == 'c') $a++;

$pregunta29 = $_POST['p29'];
if ($pregunta29 == 'a') $c++;
if ($pregunta29 == 'b') $a++;
if ($pregunta29 == 'c') $b++;

$pregunta30 = $_POST['p30'];
if ($pregunta30 == 'a') $c++;
if ($pregunta30 == 'b') $b++;
if ($pregunta30 == 'c') $a++;

$pregunta31 = $_POST['p31'];
if ($pregunta31 == 'a') $a++;
if ($pregunta31 == 'b') $b++;
if ($pregunta31 == 'c') $c++;

$pregunta32 = $_POST['p32'];
if ($pregunta32 == 'a') $b++;
if ($pregunta32 == 'b') $c++;
if ($pregunta32 == 'c') $a++;

$pregunta33 = $_POST['p33'];
if ($pregunta33 == 'a') $a++;
if ($pregunta33 == 'b') $c++;
if ($pregunta33 == 'c') $b++;

$pregunta34 = $_POST['p34'];
if ($pregunta34 == 'a') $b++;
if ($pregunta34 == 'b') $a++;
if ($pregunta34 == 'c') $c++;

$pregunta35 = $_POST['p35'];
if ($pregunta35 == 'a') $c++;
if ($pregunta35 == 'b') $a++;
if ($pregunta35 == 'c') $b++;

$pregunta36 = $_POST['p36'];
if ($pregunta36 == 'a') $a++;
if ($pregunta36 == 'b') $c++;
if ($pregunta36 == 'c') $b++;

$pregunta37 = $_POST['p37'];
if ($pregunta37 == 'a') $a++;
if ($pregunta37 == 'b') $b++;
if ($pregunta37 == 'c') $c++;

$pregunta38 = $_POST['p38'];
if ($pregunta38 == 'a') $c++;
if ($pregunta38 == 'b') $a++;
if ($pregunta38 == 'c') $b++;

$pregunta39 = $_POST['p39'];
if ($pregunta39 == 'a') $c++;
if ($pregunta39 == 'b') $a++;
if ($pregunta39 == 'c') $b++;

$pregunta40 = $_POST['p40'];
if ($pregunta40 == 'a') $b++;
if ($pregunta40 == 'b') $c++;
if ($pregunta40 == 'c') $a++;

$insertar = "UPDATE usuarios SET k = $a, v = $b, a = $c WHERE ID = $iduser";
$insertar = mysqli_query($conexion, $insertar);
header("location: bienvenidauser.php");


?>