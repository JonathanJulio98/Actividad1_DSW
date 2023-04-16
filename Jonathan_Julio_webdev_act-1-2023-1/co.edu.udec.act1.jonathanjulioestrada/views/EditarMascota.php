<?php
    include '../co.edu.udec.desarrolloweb.jonathanjulio.util//Conectar.php';
    $id = $_GET["id"];
    $sql = $conexion->query("SELECT * FROM `mascotas` WHERE id = $id;");
            
?>

<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="../css/EstiloEditarMascota.css"/>
        <title>title</title>
    </head>
    <body>
        <?php
        
            include '../controladores/EditarMascota.php';       
        ?>
        <form method="post" class="formulario">
            <h2>Editar mascota</h2>
            <input type="hidden" value="<?=$_GET["id"]?>">
            <?php
            
            while ($datos = $sql->fetch_object()){ ?>
                <p>Nombre:</p>
            <input type="text" name="lnombre" value="<?=$datos->nombre?>">
                <p>Genero:</p>
                <input type="text" name="lgenero" value="<?=$datos->genero?>">
                <p>Peso:</p>
                <input type="text" name="lpeso" value="<?=$datos->peso?>">
                <p>Tamaño:</p>
                <input type="text" name="ltamano" value="<?=$datos->tamano?>">
                <p>Color:</p>
                <input type="text" name="lcolor" value="<?=$datos->color?>">
                <P>Raza:</p>
                <input type="text" name="lraza" value="<?=$datos->raza?>">
                <p>fecha de nacimiento:</p>
                <input type="date" name="lfechanac" value="<?=$datos->fecha_nac?>">
                <p>¿Tiene vacunas?</p>
                <input type="text" name="lvacuna" value="<?=$datos->tienevacunas?>">
                <br> 
                

                
           <?php }
            ?>
            
         
                <input class="btn" name="btnmodificarm" type="submit" value="Editar mascota">      
                <a href="index.php">Volver al inicio</a>
        </form>
        
        
    </body>
</html>
