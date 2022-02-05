<?php
    
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "empleados";

$name = $_POST["name"];
$ape = $_POST["ape"];
$coe = $_POST["email"];
$tel = $_POST["tel"];

$conn = new mysqli($serverName, $userName, $password, $dbName);


    $sql ="INSERT INTO datos (Nombre,Apellido,Correo,telefono) values ('$name','$ape','$coe','$tel')";
    if($conn->query($sql) == TRUE){
        echo"registrado exitosamente!ahora inicia sesion ";
        header("Location: index.php");
    }else{
        echo"intentelo de nuevo";
    }


  $conn->close();

?>