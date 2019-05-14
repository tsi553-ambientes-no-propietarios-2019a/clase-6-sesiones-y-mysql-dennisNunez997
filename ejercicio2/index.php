<?php
/*
Escribir una página PHP que presente un formulario con los campos “usuario” y “contraseña” y un botón que permita iniciar sesión. Al iniciar la sesión se debe redireccionar a la página de inicio.php que mostrará los datos guardados en la sesión y un saludo mostrando el nombre del usuario ingresado. La página de inicio debe tener un link que permita cerrar la sesión del usuario.

Reescribir el ejemplo anterior configurando el archivo .htaccess (revisar archivo php.ini) para que permita la inclusión automática de scripts y tener una mejor organización de archivos y mayor reutilización de código.
*/



session_start();
$usuario = $_SESSION['username'];

if(!isset($usuario))
{
    header("location: login.php");
}else
{
    echo "<h1> Bienvenido $usuario </h1>";

echo "<a href='logica/salir.php'>salir</a>";
}

?>