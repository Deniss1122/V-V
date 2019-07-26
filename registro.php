<?php
    $nombre=$_GET['nombre'];
    $apellido=$_GET['apellido'];
    $telefono=$_GET['telefono'];
    $fecha=$_GET['fecha_nacimiento'];
	$correo=$_GET['correo'];
	$usuario=$_GET['nombre_usuario'];
	$clave=$_GET['clave'];
	$confirmar=$_GET['confirmar_clave'];

	$Conexion= mysqli_connect('localhost','root','','proyecto') or die(mysqli_erro($mysqli));
	if  ($clave==$confirmar){
			$sql="SELECT * FROM registro WHERE correo_electronico='$correo'";
			$resultado= mysqli_query($Conexion,$sql);
			$resultado=mysqli_fetch_array($resultado);
			if (!isset($resultado)){
				$sql="INSERT INTO registro (nombre,apellido,telefono,fecha_nacimiento,nombre_usuario,correo,clave)
				VALUES ('$nombre','$apellido','$telefono','$fecha','$usuario', '$correo', '$clave')";
				$resultado=mysqli_query($Conexion,$sql);

				if (!$resultado){
					die ("Error al registrar");
				}else{
					header ("Location: pagina.html");
				}
			}else{
				echo "Ya está registrado";
			}
        }else {
			echo "No se puede resgistrar";
		}
?>
