
<?php
    
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "empleados";

$id = $_POST["id"];


$conn = new mysqli($serverName, $userName, $password, $dbName);


    $sql ="Delete From datos Where id='$id'";
    if($conn->query($sql) == TRUE){
       
        header("Location: acciones.php");

    }

  $conn->close();

?>


