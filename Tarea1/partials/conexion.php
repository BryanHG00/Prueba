<?php
$mysqli = new mysqli("localhost", "root", "root", "escuela");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$query = "SELECT * FROM alumnos";
?>