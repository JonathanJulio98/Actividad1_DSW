<?php
    include '../co.edu.udec.desarrolloweb.jonathanjulio.util//Conectar.php';
    

    if (!empty($_POST["btningresar"])) {
        if (empty($_POST["labelnombre"]) || empty($_POST["labelcontrasena"])) {
            echo "Llene todo los campos.";
        }
        else{
            $nombre = $_POST["labelnombre"];
            $clave = $_POST["labelcontrasena"];
            
            $slq= $conexion->query("select nombre, pass from usuario "
                    . "WHERE nombre = '$nombre' and pass = '$clave' ");
            if ($datos = $slq->fetch_object()) {
                header("Location:../views/index.php");
            }
            else{
                echo"Usuario no registrado";
                
            }
        }
    
}

?>
 
