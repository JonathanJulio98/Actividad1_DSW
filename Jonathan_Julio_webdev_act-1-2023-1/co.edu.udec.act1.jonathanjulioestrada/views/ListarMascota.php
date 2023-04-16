
<!doctype html>
<html>
    <head>
        <title>title</title>
        <link rel="stylesheet" href="../css/ListarMascota.css"/>
                <script src="https://kit.fontawesome.com/c70be6997d.js" crossorigin="anonymous"></script>

    </head>
    <body>
            
        <table>
             <?php
             include '../controladores/EliminarMascota.php';
             ?>
            <thead>
                <tr>
                <th>Nombre</th>            
                <th>Género</th>            
                <th>Peso</th>            
                <th>Tamaño</th>            
                <th>Color</th>            
                <th>Raza</th>            
                <th>Nacimiento</th>            
                <th>Vacuna</th>            
                <th>User</th>            
                           

            </tr>
            </thead>
            
                <?php
    include '../co.edu.udec.desarrolloweb.jonathanjulio.util//Conectar.php';
                
                
                $sql = $conexion->query("select * from mascotas");
                while ($datos = $sql->fetch_object()){ ?>
            <tbody>
                <tr>
                    <td><?= $datos->nombre?></td>            
                    <td><?= $datos->genero?></td>            
                    <td><?= $datos->peso?></td>            
                    <td><?= $datos->tamano?></td>            
                    <td><?= $datos->color?></td>            
                    <td><?= $datos->raza?></td>            
                    <td><?= $datos->fecha_nac?></td>            
                    <td><?= $datos->tienevacunas?></td>            
                    <td><?= $datos->propietario?></td>            
                    <td><a  href="EditarMascota.php?id=<?=$datos->id?>"><i id="edit" class="fa-sharp fa-solid fa-pen-to-square"></i></a></td>            
                    <td><a  onclick="return eliminar()" href="../controladores/EliminarMascota.php?id=<?=$datos->id?>"><i id="delete" class="fa-solid fa-trash"></i></a></td>            
                               
                </tr>
            </tbody>
                
                    
              <?php }
              
                 ?> 
        </table>
        <script src="../js/Alert.js"></script>
    </body>
</html>

