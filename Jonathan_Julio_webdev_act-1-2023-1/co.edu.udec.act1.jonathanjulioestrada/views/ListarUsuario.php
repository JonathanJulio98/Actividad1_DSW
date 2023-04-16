<!doctype html>
<html>
    <head>
        <title>title</title>
        <link rel="stylesheet" href="../css/ListarMascota.css"/>
        <script src="https://kit.fontawesome.com/c70be6997d.js" crossorigin="anonymous"></script>

    </head>
    <body>
            
        <table>
           
            <thead>
                <tr>
                <th>Cédula</th>            
                <th>Nombre</th>            
                <th>Apellido</th>            
                <th>Género</th>            
                <th>Correo</th>            

            </tr>
            </thead>
            
                <?php
    include '../co.edu.udec.desarrolloweb.jonathanjulio.util//Conectar.php';
                
                
                $sql = $conexion->query("select * from usuario");
                while ($datos = $sql->fetch_object()){ ?>
            <tbody>
                <tr>
                    <td><?= $datos->cc?></td>            
                    <td><?= $datos->nombre?></td>            
                    <td><?= $datos->apellido?></td>            
                    <td><?= $datos->genero?></td>            
                    <td><?= $datos->email?></td>            
     
                    <td><a  href="../views/EditarUsuario.php"><i id="edit" class="fa-sharp fa-solid fa-pen-to-square"></i></a></td>            
                    <td><a  onclick="return eliminar()" href="../controladores/EliminarUsuario.php?cc=<?=$datos->cc?>"><i id="delete" class="fa-solid fa-trash"></i></a></td>            
                               
                </tr>
            </tbody>
                
                    
              <?php }
              
                 ?> 
        </table>
        <script src="../js/Alert.js"></script>
    </body>
</html>

