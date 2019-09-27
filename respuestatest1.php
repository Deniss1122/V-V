<?php
 
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
	echo "Eres una persona poco impulsiva.
	      Logras comtrolar tus impulsos y tomar las desiciones adecuadas, sin embargo deberias probar con la meditacion
	      para no correr con el riesgo de sufrir de impulsividad.";
		break;
	case 6:
	case 7:
	case 8:
	case 9:
	case 10:
		echo 

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
impulsividad