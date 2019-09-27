<?php
$id=$_GET['Id_codigo']
$correo=$_GET['correo']
$fecha=$_GET['fecha']
$habilitado=$_GET['habilitado']

$funcion=$_POST['funcion'];
if($funcion=="olvidocontraseña"){
	olvidarcontrasena();
}
else if($funcion=="recuperarcontraseña"){
	
}
function olvidarcontrasena(){
	$email_to=$_POST['campocorreoelectronico'];
	$conexion=mysqli_connect(
	"192.168.0.107",
	"prueba",
	"",
	"proyecto"
	);
	$sql="select * from registro where correo='".$email_to."'";
	$resultado=mysqli_query($conexion,$sql);
	if(isset($resultado)){
	while($registro=mysqli_fetch_array($resultado)){

		

		

			$sql="INSERT INTO recuperacion (Id_codigo,correo,fecha,habilitado) values (uuid(),'$correo','getdate()','$habilitado')";
			$resultado=mysqli_query($Conexion,$sql);ñlñjh, j7uy6j
			
			
		
			

		
		//$email_to="cardenasvaleria457@gmail.com";
		$email_subject="¿Has olvidado tu contraseña?: ";
		$email_message="Señor usuario, ha requerido reestablecer su contraseña, si es así de click en este enlace http://localhost/PROYECTO-V&V/olvidosucontrasena.php";

		$mail= "proyecto@gmail.com";
		//$mail= $_POST['campocorreoelectronico'];
		$header='From: ' . $mail . "\r\n ";
		$header .= "V&V\r\n";
		$header .="Mime-Version: 1.0 \r\n";
		$header .="Content-Type: text/html; charset=iso-8859-1\r\n";

		if(mail($email_to,$email_subject,$email_message,$header)){
			echo 'Enviado correctamente';
		}
		else{
			echo 'No se pudo enviar el correo';
		}		
	}
}else{
	echo "El correo electronico no existe, por favor confirmelo.";
}
}

?>