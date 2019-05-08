<?php
include('common/utils.php')
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <form action="php/process_login.php" method="post">
        <input type="text" name="username" placeholder="Usuario">
        <input type="password" name="password" placeholder="Clave">
        <button>Ingresar</button>
    </form>
</body>
</html>
