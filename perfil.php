
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

 </body>?>
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
        <form>
          <div class="row">
          <div class="col col-md-4 col-xl-4 col-12">
          <img src="imagenes/perfil.png" width="100%" hight="auto">
          </div>
          <div class="col col-md-8 col-8 col-12">
            <div class="container" style="margin-bottom:5px;">

             <div class="input-field">
                  <i class="material-icons prefix"></i>
                  <label for="NombreUsuario">Nombre de usuario o Apodo</label>
                  <br>
                  <input id="NombreUsuario" type="text" name="nombre_de_usuario" class="form-control" >
                        
              </div>
               <div class="input-field">
                        <i class="material-icons prefix"></i>
                        <label for="CampoCorreo">Correo Electronico</label>
                        <br>
                        <input id="CampoCorreo" type="text" name="correo_electronico" class="form-control" >
                        
                    </div>
                     <div class="input-field">
                        <i class="material-icons prefix"></i>
                        <label for="fechadenacimiento">fecha de nacimiento</label>
                        <br>
                        <input id="fechadenacimiento" type="date" name="fechadenacimiento" class="form-control" >
                        
                    </div>
                     <div class="input-field">
                        <i class="material-icons prefix"></i>
                        <label for="Genero">Genero</label>
                        <br>
                        <select id="Genero" type="text" name="Genero" class="form-control">
                          <option >Seleccione una opción</option>
                          <option value="Femenino">Femenino</option>
                          <option value="Masculino">Masculino</option>
                          <option value="Otro">Otro</option>
                         
                        </select>
                        


                       <INPUT id="Aceptar" TYPE="SUBMIT">
                    </div>
                  </div>
    
    
    
          </div>

          </div>
        </form>
        
   </div>
</div>

 </body>