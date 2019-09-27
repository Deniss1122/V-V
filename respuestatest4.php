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
	echo "Padeces un síndrome depresivo moderado 
          Es recomendable acudir a un especialista para tratar el problema.";
		break;
	case 6:
	case 7:
	case 8:
	case 9:
	case 10:
		echo "Padeces un síndrome depresivo  grave

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