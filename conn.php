<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$base = 'feedblog';
$conn =  mysqli_connect($host,$user,$pass,$base);

if (!$conn) {
	die("connexion echec: " .
		mysqli_connect_error());
}
