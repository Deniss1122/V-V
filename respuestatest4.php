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
	$respuesta= "Padeces un síndrome depresivo moderado 
          Es recomendable acudir a un especialista para tratar el problema.";
		break;
	case 6:
	case 7:
	case 8:
	case 9:
	case 10:
		$respuesta= "Padeces un síndrome depresivo  grave

		    Tienes sentimientos de tristeza, ganas de llorar, vacío o desesperanza
		    arrebatos de enojo, irritabilidad o frustración, incluso por asuntos de poca importancia,
			pérdida de interés o placer por la mayoría de las actividades habituales o todas, como las relaciones sexuales,
			los pasatiempos o los deportes,
		    alteraciones del sueño, como insomnio o dormir demasiado
			Cansancio y falta de energía, por lo que incluso las tareas pequeñas requieren un esfuerzo mayor
			Falta de apetito y adelgazamiento, o más antojos de comida y aumento de peso";
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