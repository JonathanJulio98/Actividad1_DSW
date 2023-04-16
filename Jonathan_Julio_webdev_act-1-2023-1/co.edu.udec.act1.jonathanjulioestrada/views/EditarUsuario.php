<?php
    include '../co.edu.udec.desarrolloweb.jonathanjulio.util//Conectar.php';
    $sql = $conexion->query("select * from usuario");
               $datos = $sql->fetch_object();
               $cc = $datos->cc;
               
    $sql = $conexion->query("SELECT * FROM `usuario` WHERE cc = $cc;");
            
?>

<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="../css/EstiloEditarMascota.css"/>
        <title></title>
    </head>
    <body>
        <?php
        
            include '../controladores/ControladorEditarUsuario.php';       
        ?>
        <form method="post" class="formulario">
            <h2>Editar Usuario</h2>
            <?php
            
            while ($datos = $sql->fetch_object()){ ?>
                <p>Cédula:</p>
            <input type="text" name="lcc" value="<?=$datos->cc?>">
                <p>Nombre:</p>
                <input type="text" name="lnombre" value="<?=$datos->nombre?>">
                <p>Apellido:</p>
                <input type="text" name="lapellido" value="<?=$datos->apellido?>">
                <p>Género:</p>
                <input type="text" name="lgenero" value="<?=$datos->genero?>">
                <p>Correo:</p>
                <input type="text" name="lcorreo" value="<?=$datos->email?>">
                <br> 
                

                
           <?php }
            ?>
            
         
                <input class="btn" name="btnmodificarU" type="submit" value="Editar Usuario">      
                <a href="index.php">Volver al inicio</a>
        </form>
        
        
    </body>
</html>


