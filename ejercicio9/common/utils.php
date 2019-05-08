<?php 
session_start();

function redirect($url) {
	header('Location: ' . $url);
	exit;
}

$conn = new mysqli('localhost', 'root', '', 'clase6');

if($conn->connect_error) {
	echo 'Existió un error en la conexión ' . $conn->connect_error;
	exit;
}

if ($_SERVER['SCRIPT_NAME'] != '/ejercicio9/index.php' && $_SERVER['SCRIPT_NAME'] != '/ejercicio9/php/process_login.php' && !isset($_SESSION['user'])) {
	redirect($_SERVER["HTTP_HOST"] . 'ejercicio9/index.php');
} elseif( $_SERVER['SCRIPT_NAME'] == '/ejercicio9/index.php' && isset($_SESSION['user']) ) {

	redirect($_SERVER["HTTP_HOST"] . 'ejercicio9/home.php');
}