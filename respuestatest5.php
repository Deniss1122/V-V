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
	echo 

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
		echo 
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