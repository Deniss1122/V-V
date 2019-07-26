<html>
  <head>
       <meta charset="utf-8">
       <link rel="stylesheet" href="css/inicio.css">
       <script src="js/popper.min.js"></script>
       <script src="js/jquery-3.3.1.min.js"></script>
       <script src="js/bootstrap.min.js"></script>
       <link rel="stylesheet" href="css/bootstrap.min.css">
       <script src="js/inicio.js"></script>
        
	   <title>¿desea recuperar contraseña?</title>

    
  </head>
  <body>
 <form action="olvidosucontrasena.php" method="POST">
 
	 <div class="arcoiris">
		 <div class="unicornio">

		 	<h1 style="text-align: center; font-size: 80px">¿Desea recuperar su contraseña?</h1>
		 	<label for="camporecuperarcontrasena"> Ingrese su nueva contraseña:</label>
		 	<input id="camporecuperarcontrasena" class= "form-control" name="recuperarcontrasena">
		 	<label for="campoconfirmarcontrasena"> Confirmar contraseña:</label>
		 	<input id="campoconfirmarcontrasena" class="form-control" name="confirmarcontrasena">
		 	<br>
		 	<input type="submit" class="btn btn-danger"name="funcion" value="recuperarcontraseña">
		 </div>
	</div>
</form>
</body>
</body>