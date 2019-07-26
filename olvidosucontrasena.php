<?php
$funcion=$_GET['funcion'];
if($funcion=="olvidocontraseña"){
	olvidarcontrasena();
	
}
else if($funcion=="recuperarcontraseña"){
	
}
fuction olvidarcontrasena(){
	

$email_to=$_POST['campocorreoelectronico'];
$conexion=mysqli_connect(
"localhost",
"root",
"",
"v&v"
);
$sql="select * from registro where correo_electronico='".$email_to."'";
$result=mysqli_query($conexion,$sql);
while($registro=mysqli_fetch_array($result)){
	if(isset($registro)){

//$email_to="cardenasvaleria457@gmail.com";
$email_subject="¿Has olvidado tu contraseña?: ";
$email_message="Señor usuario, ha requerido reestablecer su contraseña, si es así de click en este enlace http://localhost/PROYECTO-V&V/olvidosucontrasena.php";

$mail= "cardenasvaleria457@gmail.com";
//$mail= $_POST['campocorreoelectronico'];
$header='From: ' . $mail . "\r\n ";
$header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$header .="Mime-Version: 1.0 \r\n";
$header .="Content-Type: text/html; charset=iso-8859-1\r\n";

if(mail($email_to,$email_subject,$email_message,$header)){
	echo 'Enviado correctamente';
}
else{
	echo 'No se pudo enviar el correo';
}		
	}
	else{
		echo "El correo electronico no existe, por favor confirmelo.";
	}
}
}

?>