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
	echo "No muestras sintomas de baja autoestima,aun asi deberias intentar cosas nuevas para asi ver cuales son tus habilidades 
	y sentirte seguro con ellos. ";
		break;
	case 6:
	case 7:
	case 8:
	case 9:
	case 10:
		echo 
		"Muestras sintomas de baja autoestima te sientes indeciso, tienes dificultades para tomar decisiones,
		 tienes miedo exagerado a equivocarte. Sólo tomas una decisión cuando estás completamente seguro de obtener 
		 resultados al 100%.
		 Piensas que no puedes, que no sabes nada, que no lo vas a conseguir.
         No valoras, ni tus talentos ni tus posibilidades. Ves tus talentos pequeños, 
         en cambio los de los otros los ves grandes e incluso exagerados.
         Tienes miedo a lo nuevo y evitas los riesgos, te das por vencido antes de realizar o iniciar cualquier actividad.

";
		break;
	
	default:
		# code...
		break;
}

?>
autoestima 