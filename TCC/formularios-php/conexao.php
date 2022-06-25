<?php
$host = "127.0.0.1";
$port = 3336;
$socket = "";
$user = "root";
$password = "1234";
$dbname = "livro_aberto";

$conn = new mysqli($host, $user, $password, $dbname, $port, $socket)
 or die('Could not connect to the database server' . mysqli_connect_error());

 
 ?>
