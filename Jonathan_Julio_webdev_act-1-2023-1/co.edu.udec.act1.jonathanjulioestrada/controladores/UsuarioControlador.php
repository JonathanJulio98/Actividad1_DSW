<?php
include '../co.edu.udec.act1.jonathanjulioestrada.modelo/co.edu.udec.act1.jonathanjulioestrada.modelo.entidades/Usuario.php';
    include '../co.edu.udec.desarrolloweb.jonathanjulio.util//Conectar.php';

if (!empty($_POST["btnRegistrar"])) {
        if (empty($_POST["lnombre"]) || empty($_POST["lapellido"]) || empty($_POST["lcedula"])
                || empty($_POST["lgenero"]) || empty($_POST["lgmail"]) || empty($_POST["lpass"])) {
           echo "<style> h3{color:red; position: relative; text-align: center; background-color: rgba(0,0,0,0.20};}"
                    . "</style>"
                    . "<h3>"
                    . "*Llene todo los campos*"
                    . "</h2>";
        } else {
            $nombre = $_POST['lnombre'];
           $apellido = $_POST['lapellido'];
           $cc = $_POST['lcedula'];
           $genero = $_POST['lgenero'];
           $gmail = $_POST['lgmail'];
           $pass = $_POST['lpass'];
          
           
            $usuario = new Usuario();
           $usuario->setNombre($nombre);
           $usuario->setApellido($apellido);
           $usuario->setCc($cc);
           $usuario->setGenero($genero);
           $usuario->setGmail($gmail);
           $usuario->setPass($pass);
           
           $sql = $conexion->query("INSERT INTO `usuario` "
                   . "(`cc`, `pass`, `nombre`, `apellido`, `genero`, `email`)"
                   . " VALUES ('$cc', '$pass', '$nombre', '$apellido', '$genero', '$gmail')");
           if ($sql == 1) {
               echo "<style> h3{color:green; position: relative; text-align: center;}"
                    . "</style>"
                    . "<h3>"
                    . "*USUARIO REGISTRADO*"
                    . "</h2>";
               
           }
             else {
                 echo"Error al registrar usuario";
                 
             }
        }
}

?>
