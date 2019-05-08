<?php 
include('common/utils.php');
//print_r($_SESSION['user']);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
</head>
<body>
	<h1>Bienvenido <?php echo $_SESSION['user']['username']; ?></h1>

	<div><a href="php/logout.php">Cerrar sesión</a></div>
</body>
</html>