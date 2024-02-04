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

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/test.css">
  <title> Test Learning </title>
</head> 
<body>

<form id="form_testaprendizaje" action="procesartest.php" method="POST">
  
  <div class="inputs" id="inputs2">

  <input type="Number" name="pID" value="<?php echo $_GET['IDusuario']; ?>" hidden> 

  <div class="container_question">
    <div class="question">
      <h2> 1- ¿Cuál de las siguientes actividades disfrutas más?  </h2>
      <p>
        A) Escuchar música
        <br> B) Ver películas
        <br> C) Bailar con buena música
      </p>
    </div>
    <div class="select">
      <p> Elige una opción: </p>
      <select name="p1">
        <option value="a"> A) Escuchar música</option>
        <option value="b"> B) Ver películas</option>
        <option value="c"> C) Bailar con buena música</option>
      </select>
    </div>
  </div>

  <div class="container_question">
    <div class="question">
      <h2> 2- ¿Qué programa de televisión prefieres? </h2>
      <p>
        A) Reportajes de descubrimiento y lugares
        <br> B) Cómico y de entretenimiento
        <br> C) Noticias del mundo
      </p>
    </div>
    <div class="select">
    <p> Elige una opción: </p>
      <select name="p2">
          <option value="a"> A) Reportajes de descubrimiento y lugares</option>
          <option value="b"> B) Cómico y de entretenimiento</option>
          <option value="c"> C) Noticias del mundo</option>
      </select>
    </div>
  </div>

<div class="container_question">
    <div class="question">
    <h2> 3- Cuando conversas con otra persona, tú: </h2>
    <p> 
      <br> A) La escuchas atentamente
      <br> B) La observas
      <br> C) Tiendes a tocarla
  </p>
  </div>
    <div class="select">
    <p> Elige una opción: </p>
    <select name="p3">
        <option value="a"> A) </option>
        <option value="b"> B) </option>
        <option value="c"> C) </option>
    </select>
    </div>
  </div>

    <div class="container_question">
    <div class="question">
    <h2> 4- Si pudieras adquirir alguno de los siguientes artículos, ¿cuál eligirías? </h2>
    <p> 
      <br> A) Un jacuzzi
      <br> B) Un estéreo
      <br> C) Un televisor
  </p>
  </div>
    <div class="select">
    <p> Elige una opción: </p>
    <select name="p4">
        <option value="a"> A) </option>
        <option value="b"> B) </option>
        <option value="c"> C) </option>
    </select>
    </div>
  </div>

    <div class="container_question">
    <div class="question">
    <h2> 5- ¿Qué prefieres hacer un sábado por la tarde? </h2>
    <p> 
      <br> A) Quedarte en casa
      <br> B) Ir a un concierto
      <br> C) Ir al cine
  </p>
  </div>
    <div class="select">
    <p> Elige una opción: </p>
    <select name="p5">
        <option value="a"> A) </option>
        <option value="b"> B) </option>
        <option value="c"> C) </option>
    </select>
    </div>
  </div>

    <div class="container_question">
    <div class="question">
    <h2> 6- ¿Qué tipo de exámenes se te facilitan más? </h2>
    <p> 
      <br> A) Examen oral
      <br> B) Examen escrito
      <br> C) Examen de opción múltiple
  </p>
  </div>
    <div class="select">
    <p> Elige una opción: </p>
    <select name="p6">
        <option value="a"> A) </option>
        <option value="b"> B) </option>
        <option value="c"> C) </option>
    </select>
    </div>
  </div>

    <div class="container_question">
    <div class="question">
    <h2> 7- ¿Cómo te orientas más fácilmente? </h2>
    <p> 
      <br> A) Mediante el uso de un mapa
      <br> B) Pidiendo indicaciones 
      <br> C) A través de la intuición
  </p>
  </div>
    <div class="select">
    <p> Elige una opción: </p>
    <select name="p7">
        <option value="a"> A) </option>
        <option value="b"> B) </option>
        <option value="c"> C) </option>
    </select>
    </div>
  </div>

    <div class="container_question">
    <div class="question">
    <h2> 8- ¿En qué prefieres ocupar tu tiempo en un lugar de descanso? </h2>
    <p>
      <br> A) Pensar
      <br> B) Caminar en los alrededores
      <br> C) Descansar
  </p>
  </div>
    <div class="select">
    <p> Elige una opción: </p>
    <select name="p8">
        <option value="a"> A) </option>
        <option value="b"> B) </option>
        <option value="c"> C) </option>
    </select>
    </div>
  </div>

    <div class="container_question">
    <div class="question">
    <h2> 9- ¿Qué te halaga más? </h2>
    <p> 
      <br> A) Que te digan que tienes buen aspecto
      <br> B) Que te digan que tienes un trato muy agradable
      <br> C) Que te digan que tienes una conversación muy interesante
  </p>
  </div>
    <div class="select">
    <p> Elige una opción: </p>
    <select name="p9">
        <option value="a"> A) </option>
        <option value="b"> B) </option>
        <option value="c"> C) </option>
    </select>
    </div>
  </div>

    <div class="container_question">
    <div class="question">
    <h2> 10- ¿Cuál de estos ambientes te atrae más? </h2>
    <p> 
      <br> A) Uno en el que se sienta un clima agradable
      <br> B) Uno en el que se escuchen las olas del mar
      <br> C) Uno con una hermosa vista al océano
  </p>
  </div>
    <div class="select">
    <p> Elige una opción: </p>
    <select name="p10">
        <option value="a"> A) </option>
        <option value="b"> B) </option>
        <option value="c"> C) </option>
    </select>
    </div>
  </div>

    <div class="container_question">
    <div class="question">
    <h2> 11- ¿De qué manera se te facilita aprender algo? </h2>
    <p> 
      <br> A) Repitiendo en voz alta
      <br> B) Escribiéndolo varias veces
      <br> C) Relacionándolo con algo divertido
  </p>
  </div>
    <div class="select">
    <p> Elige una opción: </p>
    <select name="p11">
        <option value="a"> A) </option>
        <option value="b"> B) </option>
        <option value="c"> C) </option>
    </select>
    </div>
  </div>

    <div class="container_question">
    <div class="question">
    <h2> 12- ¿A qué evento preferirías asistir? </h2>
    <p> 
      <br> A) A una reunión social
      <br> B) A una exposición de arte
      <br> C) A una conferencia
  </p>
  </div>
    <div class="select">
    <p> Elige una opción: </p>
    <select name="p12">
        <option value="a"> A) </option>
        <option value="b"> B) </option>
        <option value="c"> C) </option>
    </select>
    </div>
  </div>

    <div class="container_question">
    <div class="question">
    <h2> 13- ¿De qué manera te formas una opinión de otras personas? </h2>
    <p> 
      <br> A) Por la sinceridad en su voz
      <br> B) Por la forma de estrecharle la mano
      <br> C) Por su aspecto
  </p>
  </div>
    <div class="select">
    <p> Elige una opción: </p>
    <select name="p13">
        <option value="a"> A) </option>
        <option value="b"> B) </option>
        <option value="c"> C) </option>
    </select>
    </div>
  </div>

    <div class="container_question">
    <div class="question">
    <h2> 14- ¿Cómo te consideras? </h2>
    <p> 
      <br> A) Atlético
      <br> B) Intelectual
      <br> C) Sociable
  </p>
  </div>
    <div class="select">
    <p> Elige una opción: </p>
    <select name="p14">
        <option value="a"> A) </option>
        <option value="b"> B) </option>
        <option value="c"> C) </option>
    </select>
    </div>
  </div>

    <div class="container_question">
    <div class="question">
    <h2> 15- ¿Qué tipo de películas te gusta más? </h2>
    <p> 
      <br> A) Clásicas
      <br> B) De amor
      <br> C) De acción
  </p>
  </div>
    <div class="select">
    <p> Elige una opción: </p>
    <select name="p15">
        <option value="a"> A) </option>
        <option value="b"> B) </option>
        <option value="c"> C) </option>
    </select>
    </div>
  </div>

    <div class="container_question">
    <div class="question">
    <h2> 16- ¿Cómo prefieres mantenerte en contacto con otra persona? </h2>
    <p> 
      <br> A) Por correo electrónico
      <br> B) Tomando un café juntos
      <br> C) Por teléfono
  </p>
  </div>
    <div class="select">
    <p> Elige una opción: </p>
    <select name="p16">
        <option value="a"> A) </option>
        <option value="b"> B) </option>
        <option value="c"> C) </option>
    </select>
    </div>
  </div>

    <div class="container_question">
    <div class="question">
    <h2> 17- ¿Cuál de las siguientes frases se identifican más contigo? </h2>
    <p> 
      <br> A) Me gusta que mi coche se sienta bien al conducirlo
      <br> B) Percibo hasta el más ligero ruido que hace mi coche
      <br> C) Es importante que mi coche esté limpio por fuera y por dentro
  </p>
  </div>
    <div class="select">
    <p> Elige una opción: </p>
    <select name="p17">
        <option value="a"> A) </option>
        <option value="b"> B) </option>
        <option value="c"> C) </option>
    </select>
    </div>
  </div>

    <div class="container_question">
    <div class="question">
    <h2> 18- ¿Cómo prefieres pasar el tiempo con tu pareja? </h2>
    <p> 
      <br> A) Donversando 
      <br> B) Acariciándote
      <br> C) Mirando algo juntos
  </p>
  </div>
    <div class="select">
    <p> Elige una opción: </p>
    <select name="p18">
        <option value="a"> A) </option>
        <option value="b"> B) </option>
        <option value="c"> C) </option>
    </select>
    </div>
  </div>

    <div class="container_question">
    <div class="question">
    <h2> 19- Si no encuentras las llaves en una bolsa: </h2>
    <p> 
      <br> A) La buscas mirando
      <br> B) Sacudes la bolsa para oir el ruido 
      <br> C) Buscas al tacto
  </p>
  </div>
    <div class="select">
    <p> Elige una opción: </p>
    <select name="p19">
        <option value="a"> A) </option>
        <option value="b"> B) </option>
        <option value="c"> C) </option>
    </select>
    </div>
  </div>

    <div class="container_question">
    <div class="question">
    <h2> 20- Cuando tratas de recordar algo, ¿cómo lo haces? </h2>
    <p> 
      <br> A) A través de imágenes
      <br> B) A través de emociones
      <br> C) A través de sonidos
  </p>
  </div>
    <div class="select">
    <p> Elige una opción: </p>
    <select name="p20">
        <option value="a"> A) </option>
        <option value="b"> B) </option>
        <option value="c"> C) </option>
    </select>
    </div>
  </div>

    <div class="container_question">
    <div class="question">
    <h2> 21- Si tuvieras dinero, ¿qué harías? </h2>
    <p> 
      <br> A) Comprar una casa
      <br> B) Viajar y conocer el mundo
      <br> C) Adquirir un estudio de grabación
  </p>
  </div>
    <div class="select">
    <p> Elige una opción: </p>
    <select name="p21">
        <option value="a"> A) </option>
        <option value="b"> B) </option>
        <option value="c"> C) </option>
    </select>
    </div>
  </div>

    <div class="container_question">
    <div class="question">
    <h2> 22- ¿Con qué frase te identificas más? </h2>
    <p> 
      <br> A) Reconozco a las personas por su voz
      <br> B) No recuerdo el aspecto de la gente
      <br> C) Recuerdo el aspecto de alguien pero no su nombre
  </p>
  </div>
    <div class="select">
    <p> Elige una opción: </p>
    <select name="p22">
        <option value="a"> A) </option>
        <option value="b"> B) </option>
        <option value="c"> C) </option>
    </select>
    </div>
  </div>

    <div class="container_question">
    <div class="question">
    <h2> 23- Si tuvieras que quedarte en una isla desierta, ¿qué preferirías llevar contigo? </h2>
    <p> 
      <br> A) Algunos buenos libros
      <br> B) Un radio portátil de alta frecuencia
      <br> C) Golosinas y comida enlatada
  </p>
  </div>
    <div class="select">
    <p> Elige una opción: </p>
    <select name="p23">
        <option value="a"> A) </option>
        <option value="b"> B) </option>
        <option value="c"> C) </option>
    </select>
    </div>
  </div>

    <div class="container_question">
    <div class="question">
    <h2> 24- ¿Cuál de los siguientes entrenamientos prefieres? </h2>
    <p> 
      <br> A) Tocar un instrumento musical
      <br> B) Sacar fotografías
      <br> C) Actividades manuales
  </p>
  </div>
    <div class="select">
    <p> Elige una opción: </p>
    <select name="p24">
        <option value="a"> A) </option>
        <option value="b"> B) </option>
        <option value="c"> C) </option>
    </select>
    </div>
  </div>

    <div class="container_question">
    <div class="question">
    <h2> 25- ¿Cómo es tu forma de vestir? </h2>
    <p> 
      <br> A) Impecable
      <br> B) Informal
      <br> C) Muy informal
  </p>
  </div>
    <div class="select">
    <p> Elige una opción: </p>
    <select name="p25">
        <option value="a"> A) </option>
        <option value="b"> B) </option>
        <option value="c"> C) </option>
    </select>
    </div>
  </div>

    <div class="container_question">
    <div class="question">
    <h2> 26- ¿Qué es lo que más te gusta de una fogata nocturna? </h2>
    <p> 
      <br> A) El calor del fuego y los bombones asados
      <br> B) El sonido del fuego quemando la leña
      <br> C) Mirar el fuego y las estrellas
  </p>
  </div>
    <div class="select">
    <p> Elige una opción: </p>
    <select name="p26">
        <option value="a"> A) </option>
        <option value="b"> B) </option>
        <option value="c"> C) </option>
    </select>
    </div>
  </div>

    <div class="container_question">
    <div class="question">
    <h2> 27- ¿Cómo se te facilita entender algo? </h2>
    <p> 
      <br> A) Cuando te lo explican verbalmente
      <br> B) Cuando utilizan medios visuales
      <br> C) Cuando se realiza a través de una actividad
  </p>
  </div>
    <div class="select">
    <p> Elige una opción: </p>
    <select name="p27">
        <option value="a"> A) </option>
        <option value="b"> B) </option>
        <option value="c"> C) </option>
    </select>
    </div>
  </div>

    <div class="container_question">
    <div class="question">
    <h2> 28- ¿Por qué te distingues? </h2>
    <p> 
      <br> A) Por tener una gran intuición
      <br> B) Por ser un buen conversador
      <br> C) Por ser un buen observador
  </p>
  </div>
    <div class="select">
    <p> Elige una opción: </p>
    <select name="p28">
        <option value="a"> A) </option>
        <option value="b"> B) </option>
        <option value="c"> C) </option>
    </select>
    </div>
  </div>

    <div class="container_question">
    <div class="question">
    <h2> 29- ¿Qué es lo que más disfrutas de un amanecer? </h2>
    <p> 
      <br> A) La emoción de vivir un nuevo día
      <br> B) Las tonalidades del cielo
      <br> C) El encanto de las aves
  </p>
  </div>
    <div class="select">
    <p> Elige una opción: </p>
    <select name="p29">
        <option value="a"> A) </option>
        <option value="b"> B) </option>
        <option value="c"> C) </option>
    </select>
    </div>
  </div>

    <div class="container_question">
    <div class="question">
    <h2> 30- Si pudieras elegir, ¿qué preferirías ser? </h2>
    <p> 
      <br> A) Un gran médico
      <br> B) Un gran músico
      <br> C) Un gran pintor
  </p>
  </div>
    <div class="select">
    <p> Elige una opción: </p>
    <select name="p30">
        <option value="a"> A) </option>
        <option value="b"> B) </option>
        <option value="c"> C) </option>
    </select>
    </div>
  </div>

    <div class="container_question">
    <div class="question">
    <h2> 31- Cuando eliges tu ropa, ¿qué es lo más importante para ti? </h2>
    <p> 
      <br> A) Que sea adecuada
      <br> B) Que luzca bien
      <br> C) Que sea cómoda
  </p>
  </div>
    <div class="select">
    <p> Elige una opción: </p>
    <select name="p31">
        <option value="a"> A) </option>
        <option value="b"> B) </option>
        <option value="c"> C) </option>
    </select>
    </div>
  </div>

    <div class="container_question">
    <div class="question">
    <h2> 32- ¿Qué es lo que más disfrutas de una habitación? </h2>
    <p> 
      <br> A) Que sea silenciosa
      <br> B) Que sea confortable
      <br> C) Que esté limpia y ordenada
  </p>
  </div>
    <div class="select">
    <p> Elige una opción: </p>
    <select name="p32">
        <option value="a"> A) </option>
        <option value="b"> B) </option>
        <option value="c"> C) </option>
    </select>
    </div>
  </div>

    <div class="container_question">
    <div class="question">
    <h2> 33- ¿Qué es más sexy para ti? </h2>
    <p> 
      <br> A) Una iluminación tenue
      <br> B) El perfume
      <br> C) Cierto tipo de música
  </p>
  </div>
    <div class="select">
    <p> Elige una opción: </p>
    <select name="p33">
        <option value="a"> A) </option>
        <option value="b"> B) </option>
        <option value="c"> C) </option>
    </select>
    </div>
  </div>

    <div class="container_question">
    <div class="question">
    <h2> 34- ¿A qué tipo de espectáculo preferirías asistir? </h2>
    <p> 
      <br> A) A un concierto de música
      <br> B) A un espectáculo de magia
      <br> C) A una muestra gastronómica
  </p>
  </div>
    <div class="select">
    <p> Elige una opción: </p>
    <select name="p34">
        <option value="a"> A) </option>
        <option value="b"> B) </option>
        <option value="c"> C) </option>
    </select>
    </div>
  </div>

    <div class="container_question">
    <div class="question">
    <h2> 35- ¿Qué te atrae más de una persona? </h2>
    <p> 
      <br> A) Su trato y su forma de ser
      <br> B) Su aspecto físico
      <br> C) Su conversación
  </p>
  </div>
    <div class="select">
    <p> Elige una opción: </p>
    <select name="p35">
        <option value="a"> A) </option>
        <option value="b"> B) </option>
        <option value="c"> C) </option>
    </select>
    </div>
  </div>

    <div class="container_question">
    <div class="question">
    <h2> 36- Cuando vas de compras, ¿en dónde pasas mucho tiempo? </h2>
    <p> 
      <br> A) En una librería
      <br> B) En una perfumería
      <br> C) En una tienda de discos
  </p>
  </div>
    <div class="select">
    <p> Elige una opción: </p>
    <select name="p36">
        <option value="a"> A) </option>
        <option value="b"> B) </option>
        <option value="c"> C) </option>
    </select>
    </div>
  </div>

    <div class="container_question">
    <div class="question">
    <h2> 37- ¿Cuál es tu idea de una noche romántica? </h2>
    <p> 
      <br> A) A la luz de las velas
      <br> B) Con música romántica
      <br> C) Bailando tranquilamente
  </p>
  </div>
    <div class="select">
    <p> Elige una opción: </p>
    <select name="p37">
        <option value="a"> A) </option>
        <option value="b"> B) </option>
        <option value="c"> C) </option>
    </select>
    </div>
  </div>

    <div class="container_question">
    <div class="question">
    <h2> 38- ¿Qué es lo que más disfrutas de viajar? </h2>
    <p> 
      <br> A) Conocer personas y hacer nuevos amigos
      <br> B) Conocer lugares nuevos
      <br> C) Aprender sobre otras costumbres
  </p>
  </div>
    <div class="select">
    <p> Elige una opción: </p>
    <select name="p38">
        <option value="a"> A) </option>
        <option value="b"> B) </option>
        <option value="c"> C) </option>
    </select>
    </div>
  </div>

    <div class="container_question">
    <div class="question">
    <h2> 39- Cuando estás en la ciudad, ¿qué es lo que más echas de menos en el campo?</h2>
    <p>
      <br> A) El aire limpio y refrescante
      <br> B) Los paisajes
      <br> C) La tranquilidad
  </p>
  </div>
    <div class="select">
    <p> Elige una opción: </p>
    <select name="p39">
        <option value="a"> A) </option>
        <option value="b"> B) </option>
        <option value="c"> C) </option>
    </select>
    </div>
  </div>

    <div class="container_question">
    <div class="question">
    <h2> 40- Si te ofrecieran uno de los siguientes empleos, ¿cuál eligirías? </h2>
    <p> 
      <br> A) Director de una estación de radio
      <br> B) Director de un club deportivo
      <br> C) Director de una revista
  </p>
  </div>
    <div class="select">
    <p> Elige una opción: </p>
    <select name="p40">
        <option value="a"> A) </option>
        <option value="b"> B) </option>
        <option value="c"> C) </option>
    </select>
    </div>
  </div>
  </div>

  <br><br>
  <input type="submit" value="Enviar" name="Enviar">

</form>
</body>

</html>