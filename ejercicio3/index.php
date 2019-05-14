<?php
/*
Basados en el ejemplo 2:
a) Controlar que solo inicie sesión si se han escrito el usuario y contraseña en los campos. 
b) Validar el usuario y contraseña contra una lista de usuarios y contraseñas almacenados en un array o una base de datos (tabla usuarios).
c) Crear un formulario que le permita registrar un usuario con los siguientes datos: 
     - nombre
     - apellidos
     - usuario
     - clave
     - repetir clave
     - género: masculino, femenino (radio)
     - correo electrónico
     - fecha de nacimiento
     - ciudad de nacimiento (lista de ciudades)
     - intereses: programación, redes, ensamblaje, SOA, BI, análisis de texto, big data, redes sociales   (checkbox)
     - una breve biografía
d) El formulario anterior debe ser enviado a través de un botón submit mediante POST y debe guardar la información en la base de datos (tabla usuarios) y presentar una página con toda la información ingresada en el formulario, esta página debe incluir un link que permita volver a ingresar los datos y un link que permita cerrar la sesión y volver al index.
*/
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-squiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="css/style.css" rel="stylesheet">
</head>
<body>

     <div class="contenedor">

          <div class="row">
               <div class="col-sm">
                    <form action = "logica/loguear.php" method="POST">
                         <h1>Registrarse</h1>
                         <label>nombre:</label>
                         <input type="text" name="nombre" placeholder="ingrese su nombre">
                         <br>
                         <br>
                         <label>apellidos:</label>
                         <input type="text" name="apellidos" placeholder="ingrese sus apellidos">
                         <br>
                         <br>
                         <label>usuario:</label>
                         <input type="text" name="usuario" placeholder="ingrese su usuario">
                         <br>
                         <br>
                         <label>contraseña: </label>
                         <input type="password" name="clave" placeholder="ingrese su clave">
                         <br>
                         <br>
                         <input type="password" name="clave_2" placeholder="ingrese de nuevo su clave">
                         <br>
                         <br>
                         <label>genero: </label>
                         <br>
                         <br>
                         <input type="radio" name="genero" value="masculino"> Masculino <br>
                         <input type="radio" name="genero" value="femenino"> Femenino <br>
                         <br>
                         <br>
                         <label>Email: </label>
                         <input type="text" name="correo" placeholder="ingrese su email">
                         <br>
                         <br>
                         <label>Fecha de nacimiento: </label>
                         <input type="text" name="fecha_nacimiento" placeholder="fecha de nacimiento">
                         <br>
                         <br>
                         <label>ciudad de nacimiento: </label>
                         <input type="text" name="ciudad_nacimiento" placeholder="ciudad de nacimiento">
                         <br>
                         <br>
                         <label>intereses</label>
                         <br>
                         <br>
                         <textarea rows="4" cols="30"></textarea>
                         <br>
                         <br>
                         <label>breve biografia</label>
                         <br>
                         <br>
                         <textarea rows="4" cols="30"></textarea>
                         <br>
                         <br>
                         <button type="submit">Registrarse</button>
                    </form>
               </div>
               <div class="col-sm">
                    <form action="logica/loguear.php" method="POST">
                         <h1>Iniciar sesion</h1>
                         <label>Usuario: </label>
                         <input type="text" name="usuario" placeholder="digite usuario">
                         <br><br>
                         <label>Contraseña</label>
                         <input type="password" name="clave" placeholder="digite clave">
                         <br><br>
                         <button type="submit">Iniciar sesion</button>

                    </form>
 
               </div>
          </div>



     
     <div class="registro">
          
     </div>
     
     
     <div class="sesion">
         </div>

     
     </div>
</body>
</html>