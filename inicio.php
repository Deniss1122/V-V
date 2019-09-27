<?php

    
	$correo=$_GET['correo_electronico'];
	$clave=$_GET['clave'];

    $Conexion= mysqli_connect('localhost','root','','proyecto') or die(mysqli_erro($mysqli));
    
			$sql="SELECT * FROM registro WHERE correo='$correo' && clave='$clave'";
            $resultado= mysqli_query($Conexion,$sql);
            $retorno=array();
            while($fila=mysqli_fetch_array($resultado)){
                $retorno=array('id'=>$fila['id']);
            }
			if (sizeof($retorno)){
				
					header("Location: paginaP.php");
				}else{
					echo "No se puede ingresar";
				}
?>
