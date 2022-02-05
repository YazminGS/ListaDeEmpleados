
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="css/hoja.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Empresa</title>
    </head>
    
<body>  
	
	
   <nav>
  <div class="nav-wrapper">
    <a href="index.php" class="brand-logo">LISTA DE EMPLEADOS</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
    </ul>
  </div>
</nav>
   


<center>
		<form method="post" action="acciones.php">
		
			<label><H4><i class="fa fa-key"></i>Buscar Empleado</H4></label>
			
      <div class="row">
      <div class="col s12">
     <input type="text" class="form-control" name="caracter"> 
      <label >Empleado a buscar</label>
    </div>
  </div>

				<input type="submit" name="submit" value="enter"> <br>
		
	</form>		

      
</center>
<br>
<br>
  
<center>
		<form method="post" action="agregar.php">
		
			<label><H4><i class="fa fa-key"></i>Agregar Empleado</H4></label>

      <div class="row">
   
      <div class="row">
        <div class="input-field col s6">
        <input type="text" class="form-control"  name="name">
          <label for="first_name">Nombre</label>
        </div>
        <div class="input-field col s6">
        <input type="text" class="form-control"  name="ape">
          <label for="last_name">Apellido</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
        <input type="text" class="form-control"  name="email">
          <label for="email">Email</label>
        </div>
        <div class="input-field col s6">
        <input type="text" class="form-control"  name="tel">
          <label for="tel">Telefono</label>
        </div>
      </div>
    
  </div>
		
      <input type="submit" name="submit" value="enter"> <br>
	</form>		
</center>  

<br>
<br>
	
      <script type="text/javascript" src="js/materialize.min.js"></script>
     <script type="text/javascript" src="cordova.js"></script>
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="js/js.cookie.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
   
        <script> $(document).ready(function() {
    M.updateTextFields();
  }); </script>
      </body>    


<footer class="page-footer">
          <div class="footer-copyright">
            <div class="container">
            © 2022 
           
            </div>
          </div>
        </footer>
    
</html>  

