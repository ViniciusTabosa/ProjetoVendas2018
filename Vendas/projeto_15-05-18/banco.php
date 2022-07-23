<?php
$hostname_conexao = "localhost";
$username_conexao = "root";
$password_conexao = "";
$database_conexao = "dbvendas";
$connect_port = "3307";


// conexao é um objeto
$conexao = new mysqli($hostname_conexao, $username_conexao, $password_conexao, $database_conexao, $connect_port);

if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
	echo mysqli_connect_error(); 

?>