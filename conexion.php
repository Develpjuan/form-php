<?php 

$server = 'localhost';
$user = 'root';
$password = '';
$db = "ingreso";

//$con = new mysqli("localhost", "root", "", "ingreso");
$conex = new mysqli("$server", "$user", "$password", "$db");

if($conex -> connect_errno) {
    echo "No hay conexion: (".$conex->connect_errno.")". $conex->connect_error;
} else {
    echo "Conexion exitosa";
};

?>
