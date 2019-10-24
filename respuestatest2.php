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
	 "Síntomas físicos:
          No muestras síntomas físicos claros que puedan determinar que sufres ansiedad. 
          Aunque piensas que estás algo angustiado/a o estresado/a en algunas ocasiones, 
          la verdad es que lo llevas con total normalidad y sin que estos estados afecten a tu salud.

          Síntomas Psíquicos:
          No muestras síntomas psíquicos que puedan determinar que sufres ansiedad. 
          Cuando tienes alguna preocupación tu mente sabe separarla del resto de acontecimientos no relacionados, 
          pues afrontas los problemas por sí mismos, sin por ello involucrar el resto de áreas de tu vida 
          y evitando caer en el pesimismo.

          Síntomas de conducta:
          No muestras síntomas conductuales relacionados con la ansiedad. 
          Tu manera de comportarte habitual es completamente normal, tienes una actitud hacia ti mismo 
          y hacia los demás coherente y saludable.

		  Síntomas de intelectuales:
		  No muestras síntomas intelectuales que puedan determinar que sufres ansiedad. 
		  Posees pensamientos racionales en cuanto a los acontecimientos que te rodean, 
		  lo cual evita que caigas de forma gratuita en estados de estrés, infravaloración y por tanto también ansiedad.";
		break;
	case 6:
	case 7:
	case 8:
	case 9:
	case 10:
		$respuesta=
		 "Síntomas físicos:
		 Tienes síntomas físicos evidentes relacionados con un trastorno de ansiedad generalizado. 
		 Estás especialmente susceptible y no controlas suficientemente tus nervios y esto te ha llevado
		 a sentirte mal contigo mismo/a a nivel orgánico. Debes empezar a intentar relajarte de forma activa, 
		 con métodos específicos para ello.

 		 Síntomas Psíquicos
         Vives al borde de un ataque de nervios. 
         Tienes síntomas psíquicos evidentes relacionados con un trastorno de ansiedad generalizado. 
         Cuando tienes algún problema, ya sea grande o pequeño, 
         te sientes abrumado/a y no sabes separarlo del resto de acontecimientos vitales,
         por lo que caes fácilmente en la ansiedad, y de rebote puede que en la depresión. 
         Debes vigilar mucho y pedir ayuda a un experto si esto te sucede a menudo o desde hace tiempo.

		 Síntomas de conducta
         Muestras muchos síntomas conductuales relacionados con un trastorno de ansiedad generalizado. 
         Esto te impide llevar una vida normal, pues te sientes mal cada vez que sales a la calle, 
         incluso sólo de pensar en lo que te ocurrirá una vez allí. 
         Estos pensamientos irracionales que te invaden a su vez precipitan nuevamente las conductas ansiógenas.
         Necesitas ayuda para superar este estado cuanto antes o irá a peor.

         Síntomas de intelectuales
         Tienes síntomas intelectuales claros relacionados con un trastorno de ansiedad generalizado. 
         Tus pensamientos son catastrofistas e irracionales, no tienen una fundamento ni una razón real de ser. 
         Deberías poner fin a ellos, pues están minando tu autoestima y tu capacidad de llevar una vida normal, 
         además te hacen sentir profundamente desgraciado/a.";
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
ansiedad