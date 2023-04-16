
<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="../css/EstiloInicio.css"/>
        <script src="https://kit.fontawesome.com/c70be6997d.js" crossorigin="anonymous"></script>

        <title>Inicio</title>
    </head>
    <body>
         
        <header>
            <h2>Menú mascota</h2>
            <form method="post">

                
                <li>
                    <input type="submit" name="listarm" value="Listar mascota">
                </li>
                <li>
                    <input type="submit" name="agregarm" value="Agregar mascota">
                </li>
                <div class="content-user">
                    <div class="user">
                    <i class="fa-solid fa-user"></i>
                    <input  type="submit" name="listarU" value="Ver Usuario">
                </div>
                </div> 
                
            
              
            </form>
            
            
        </header>
        <?php
            
        if (isset($_POST["listarm"])) {
            include '../views/ListarMascota.php';
            
        }
        if (isset($_POST["agregarm"])) {
            header("location:AgregarMascota.php");
        }
       
        if (isset($_POST["listarU"])) {
            include '../views/ListarUsuario.php';
        }
       
        
        ?>
        
    </body>
</html>



