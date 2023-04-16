<?php

               
if (!empty($_POST["btnmodificarU"])) {
        if (empty($_POST["lcc"]) || empty($_POST["lnombre"]) 
                || empty($_POST["lapellido"]) 
                    || empty($_POST["lgenero"]) || empty($_POST["lcorreo"])){ 
           echo ""
            . "<style> h2{color:red; position: relative; text-align: center; background-color: rgba(0,0,0,0.20};}"
                    . "</style>"
                    . "<h2>"
                    . "*Llene todo los campos*"
                    . "</h2>";
        }
        else{
            $sql = $conexion->query("select * from usuario");
            $usuario = $sql->fetch_object();
            $ccvieja = $usuario->cc;
               
            $cc = $_POST["lcc"];
            $nombre = $_POST["lnombre"];
            $apellido = $_POST["lapellido"];
            $genero = $_POST["lgenero"];
            $correo = $_POST["lcorreo"];

            
            $sql = $conexion->query("update usuario set cc = '$cc', "
                    . "nombre='$nombre', apellido='$apellido', genero='$genero', "
                    . "email='$correo' where cc=$ccvieja");
            if ($sql=1) {
                header("location:index.php");
            }
            else{
                echo 'Se produjo un error.';
            }
        }
}

?>
