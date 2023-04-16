
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/EstiloLogin.css"/>
        <title>Login</title>
    </head>
    <body>
       
        <form method="post">
            <h2>Iniciar Sesión</h2><br>
            <?php
                include '../controladores/UsuarioControladorEntrarSesion.php';
            ?>
            <p>Nombre de usuario:</p>
            <input type="text" name="labelnombre">
            <p>Contraseña:</p>
            <input type="password" name="labelcontrasena">
            <input class="btn"type="submit" value="Entrar" name="btningresar">
            <a href="../views/RegistrarUsuario.php">REGISTRARSE</a>
        </form>
        
    </body>
</html>