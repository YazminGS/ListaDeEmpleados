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
<center><h4>Resultados de la busqueda</h4></center>

<?php
  
$serverName ="localhost";
$userName = "root";
$password = "";
$dbName = "empleados";

$carac = (isset($_POST['caracter']) ? $_POST['caracter'] : null);

$conn = new mysqli($serverName, $userName, $password, $dbName);

$sqlState = false;


 $sql = "SELECT * FROM datos WHERE Nombre LIKE '%$carac%' or Apellido LIKE '%$carac%' or Correo LIKE '%$carac%' or telefono LIKE '%$carac%'";
 //echo ($sql);
 $result = $conn->query($sql);



 if($result->num_rows>0){
  while($row = $result->fetch_assoc()){
    echo  '<center><div><form action=""><input type="checkbox">'.$row['id'], $row['Nombre'],$row['Apellido'],$row['Correo'],$row['telefono'] .'</form></div></center>';
  }
       };



$conn ->close();
?>
<br>
<br>
<center>
		<form method="post" action="borrar.php">
		
			<label><H4><i class="fa fa-key"></i>ELIMINAR REGISTRO</H4></label>
        <div class="row">
        <div class="col s12">
         ID del registro a borrar: 
          <div class="input-field inline">
          <input type="text" class="form-control" placeholder="primero numero de la fila"  name="id">
                      </div>
        </div>
      </div>
      <input type="submit" name="submit" value="enter"> <br>

      </form>		

      
</center>
<br>
<br>
<center>
		<form method="post" action="editar.php">
		
			<label><H4><i class="fa fa-key"></i>EDITAR REGISTRO</H4></label>
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
   <div class="row">
        <div class="col s12">
          <div class="input-field inline">
          <input type="text" class="form-control" placeholder="id"  name="id2">
                      </div>
        </div>
      </div>
</div>
      
      <input type="submit" name="submit" value="enter"> <br>

      </form>		

      
</center>

<br>
<br>
	</body> 

  <footer class="page-footer">
          <div class="footer-copyright">
            <div class="container">
            © 2022 
           
            </div>
          </div>
        </footer>


</html>

