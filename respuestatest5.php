<?php
  $respuesta="";
 $pregunta1=$_GET['PREGUNTA1'];
 $pregunta2=$_GET['PREGUNTA2'];
 $pregunta3=$_GET['PREGUNTA3'];
 $pregunta4=$_GET['PREGUNTA4'];
 $pregunta5=$_GET['PREGUNTA5'];
 $pregunta6=$_GET['PREGUNTA6'];
 $pregunta7=$_GET['PREGUNTA7'];
 $pregunta8=$_GET['PREGUNTA8'];
 $pregunta9=$_GET['PREGUNTA9'];
 $pregunta10=$_GET['PREGUNTA10'];


 $respuestasSi=0;
 $respuestasNo=0;
if($pregunta1=="si"){
	$respuestasSi++;
}else{
	$respuestasNo++;
}
if($pregunta2=="si"){
	$respuestasSi++;
}else{
	$respuestasNo++;
}
if($pregunta3=="si"){
	$respuestasSi++;
}else{
	$respuestasNo++;
}
if($pregunta4=="si"){
	$respuestasSi++;
}else{
	$respuestasNo++;
}
if($pregunta5=="si"){
	$respuestasSi++;
}else{
	$respuestasNo++;
}
if($pregunta6=="si"){
	$respuestasSi++;
}else{
	$respuestasNo++;
}
if($pregunta7=="si"){
	$respuestasSi++;
}else{
	$respuestasNo++;
}
if($pregunta8=="si"){
	$respuestasSi++;
}else{
	$respuestasNo++;
}
if($pregunta9=="si"){
	$respuestasSi++;
}else{
	$respuestasNo++;
}
if($pregunta10=="si"){
	$respuestasSi++;
}else{
	$respuestasNo++;
}
switch ($respuestasSi) {
	case 0 :
	case 1:
	case 2:
	case 3:		
	case 4:
	case 5:
	 $respuesta=

	   "El tipo de personalidad A corresponde a aquellas personas que necesitan afirmarse permanentemente 
	    a través de logros personales para alcanzar la percepción de auto-control. 
	    Experimentan una constante urgencia de tiempo que les hace intolerable el reposo y la inactividad.
        Estas personas también presentan una percepción de amenaza casi contínua a su autoestima, 
        eligiendo la acción como estrategia de enfrentamiento a sus problemas. 
        Tienen tendencia a la dominación, una profunda inclinación a competir y una elevada agresividad 
        que les induce a vivir en un constante estado de lucha.

        Las enfermedades más frecuentes en estos sujetos son las de tipo coronario, 
        problemas psicosomáticos y síndromes de ansiedad generalizada. 
        El patrón de conducta A se adquiere a través del aprendizaje y se puede detectar ya en la adolescencia.";
	break;
	case 6:
	case 7:
	case 8:
	case 9:
	case 10:
		 $respuesta=
		 "El patrón de personalidad B  
		 Son personas con un adecuado nivel de auto-control y autoestima que no les hace 
		 falta mantener actitudes compensadoras para reafirmarse. 
		 No son competitivas ni tan fácilmente irritables, y en general se toman la vida con mayor tranquilidad";
		break;
	
	default:
		# code...
		break;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilostest.css">
    <script type="text/javascript" src="js/popper.min.js"></script>
		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <!-- <link rel="stylesheet" href="icon/css/fontello.css"> -->
    <title>Psicologia V&V</title>
</head>
<body >
   <div id="body">
      <main>
          <div class="content-all">
              <header>
                <h1>V&V</h1>
                <h2>Tu rincon de las emociones</h2>
              </header>
              <input type="checkbox" id="check">
              <label for="check" class="icon-menu"><img src="icon/lista.svg"></label>
            

              <nav class="menu" >
                <ul>
                    <li><a href="paginadetest.php"> Test</a></li>
                    <li><a href="">Descripciones</a></li>
                    <li><a href="">Instrucciones</a></li>
                    <li><a href="">Configuración</a></li>
                    <li><a href="">Cerrar sesión</a></li>
                </ul>   
              </nav>
        </div>
     </main>
        <hr style="clear:both;">
        <br>
        <br>
        <div id="container" style="margin-left:20%;margin-right:20%" >
        <p id="respuesta"><?php echo $respuesta; ?></p>
        <INPUT id="botonvolver" TYPE="button" onclick="window.location.href='paginadetest.php'" value="Volver">
        
   </div>
</div>

 </body>?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilostest.css">
    <script type="text/javascript" src="js/popper.min.js"></script>
		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <!-- <link rel="stylesheet" href="icon/css/fontello.css"> -->
    <title>Psicologia V&V</title>
</head>
<body >
   <div id="body">
      <main>
          <div class="content-all">
              <header>
                <h1>V&V</h1>
                <h2>Tu rincon de las emociones</h2>
              </header>
              <input type="checkbox" id="check">
              <label for="check" class="icon-menu"><img src="icon/lista.svg"></label>
            

              <nav class="menu" >
                <ul>
                    <li><a href="paginadetest.php"> Test</a></li>
                    <li><a href="">Descripciones</a></li>
                    <li><a href="">Instrucciones</a></li>
                    <li><a href="">Configuración</a></li>
                    <li><a href="">Cerrar sesión</a></li>
                </ul>   
              </nav>
        </div>
     </main>
        <hr style="clear:both;">
        <br>
        <br>
        <div id="container" style="margin-left:20%;margin-right:20%" >
        <p id="respuesta"><?php echo $respuesta; ?></p>
        <INPUT id="botonvolver" TYPE="button" onclick="window.location.href='paginadetest.php'" value="Volver">
        
   </div>
</div>

 </body>