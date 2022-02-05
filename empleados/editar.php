
<?php
    
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "empleados";

$id = $_POST["id2"];
$name = $_POST["name"];
$ape = $_POST["ape"];
$coe = $_POST["email"];
$tel = $_POST["tel"];


$conn = new mysqli($serverName, $userName, $password, $dbName);


    $sql ="UPDATE datos SET Nombre='$name', Apellido='$ape', Correo='$coe', telefono='$tel' WHERE id='$id';";
    if($conn->query($sql) == TRUE){
       
        header("Location: acciones.php");

    }

  $conn->close();

?>