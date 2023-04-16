
<html>
    <head>
        <script src="https://kit.fontawesome.com/c70be6997d.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/EstiloAgregarMascota.css"/>
        <title>Registrar</title>
    </head>
    <body>
         <?php
             

          include '../controladores/MascotaControlador.php';
          include '../co.edu.udec.desarrolloweb.jonathanjulio.util//Conectar.php';
          
          
             
?>
        
        <form method="post" class="formulario">
         <h2>Agregar Mascota</h2>
         <p>Nombre:</p>
         <input type="text" name="lnombre">
         <p>Genero:</p>
         <input type="text" name="lgenero">
         <p>Peso:</p>
         <input type="text" name="lpeso">
         <p>Tamaño:</p>
         <input type="text" name="ltamano">
         <p>Color:</p>
         <input type="text" name="lcolor">
         <P>Raza:</p>
         <input type="text" name="lraza">
         <p>fecha de nacimiento:</p>
         <input type="date" name="lfechanac">
         <p>¿Tiene vacunas?</p>
         <input type="text" name="lvacuna" placeholder="Sí/No">
         <br> 
         <input class="btn" name="btnagregar" type="submit" value="Agregar">
                  <br> 

        <a href="index.php"><i class="fa-sharp fa-solid fa-arrow-left" style="color: #23ec09;"></i>Volver al inicio</a>
         
        </form>
        
        
    </body>
</html>


