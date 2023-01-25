<?php
$mysql = new mysqli("localhost", "root", "root", "escuela");
if ($mysql->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$nombre = $_GET["Nombre"];
$APa = $_GET["APaterno"];
$AMa = $_GET["AMaterno"];
$FNac = $_GET["FNac"];

$query = 'INSERT INTO alumnos(Nombre, APaterno, AMaterno,FNac)'.
'VALUES ("'.$nombre.'","'.$APa.'","'.$AMa.'","'.$FNac.'")';

         
if ($mysql->query($query) === true){
    header("Location: /Tarea1/index.php");
    exit();
}else{
    echo "Error" . $query . "<br>" . $mysql->error;
}


?>