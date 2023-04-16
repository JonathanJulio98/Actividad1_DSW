<?php
          include '../controladores/UsuarioControlador.php';
    include '../co.edu.udec.desarrolloweb.jonathanjulio.util//Conectar.php';
        ?>
<!doctype html>
<html>
    <head>
        <title>Registrar Usuario</title>
        <link rel="stylesheet" href="../css/EstiloRegistrarUsuario.css"/>
    </head>
    <body>
         
        
        <form method="post">
            
         <h2>Registrar Usuario</h2>
         <p>Nombre:<p>
         <input type="text" name="lnombre">
         <p>Apellido:</p>
         <input type="text" name="lapellido">
         <p>Cédula:</p>
         <input type="text" name="lcedula">
         <p>Género:</p>
         <input type="text" name="lgenero">
         <p>Gmail:</p>
         <input type="text" name="lgmail">
         <p>Contraseña</p>
         <input type="password" name="lpass"><br>
         <input class="btn" name="btnRegistrar" type="submit" value="Registrarse">
         <a href="Login.php">Volver al inicio</a>
        </form>
        
    </body>
</html>

