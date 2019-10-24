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
	$respuesta= "Eres una persona poco impulsiva.
	      Logras comtrolar tus impulsos y tomar las desiciones adecuadas, sin embargo deberias probar con la meditacion
	      para no correr con el riesgo de sufrir de impulsividad.";
		break;
	case 6:
	case 7:
	case 8:
	case 9:
	case 10:
		$respuesta=
		"Eres una persona bastante impulsiva.
		Tienes un control medio de impulsos. 
		En general meditas bastante antes de actuar, pero no es de extrañar que en algunos momentos 
		(y dependiendo de la persona y el lugar), 
		te liberes y dejes ir toda tu impulsividad de golpe sin prever las consecuencias de tus palabras o incluso de tus actos. 
		No debes preocuparte demasiado, esto es lo más normal del mundo y a todos nos ocurre en un momento u otro.
        De todas formas, estaría bien que intentases reflexionar un poco más cuando te halles con alguien de mucha confianza, 
        pues no pueden ser siempre los mismos los que paguen el pato de tus pérdidas de control.";
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

 </body>
       




impulsividad