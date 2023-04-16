<?php
include '../co.edu.udec.act1.jonathanjulioestrada.modelo/co.edu.udec.act1.jonathanjulioestrada.modelo.entidades/Mascota.php';
include '../co.edu.udec.act1.jonathanjulioestrada.modelo/co.edu.udec.act1.jonathanjulioestrada.modelo.entidades/Usuario.php';
    include '../co.edu.udec.desarrolloweb.jonathanjulio.util//Conectar.php';

if (!empty($_POST["btnagregar"])) {
        if (empty($_POST["lnombre"]) || empty($_POST["lgenero"]) 
                || empty($_POST["lpeso"]) 
                    || empty($_POST["ltamano"]) || empty($_POST["lcolor"]) 
                        || empty($_POST["lraza"]) || empty($_POST["lfechanac"]) 
                            || empty($_POST["lvacuna"])) {
            echo ""
            . "<style> h2{color:red; position: relative; text-align: center; background-color: rgba(0,0,0,0.20};}"
                    . "</style>"
                    . "<h2>"
                    . "*Llene todo los campos*"
                    . "</h2>";
        } else {
            $nombre = $_POST['lnombre'];
           $genero = $_POST['lgenero'];
           $peso = $_POST['lpeso'];
           $tamano = $_POST['ltamano'];
           $color = $_POST['lcolor'];
           $raza = $_POST['lraza'];
           $fecha = $_POST['lfechanac'];
           $vacuna = $_POST['lvacuna'];
          
          
            
            $mascota = new Mascota();
            $mascota->setNombre($nombre);
            $mascota->setGenero($genero);
            $mascota->setPeso($peso);
            $mascota->setTamano($tamano);
            $mascota->setColor($color);
            $mascota->setRaza($raza);
            $mascota->setFechanac($fecha);
            $mascota->setVacuna($vacuna);
            
            
            
            $user = $conexion->query("SELECT cc FROM usuario");
            $persona = $user->fetch_object();
            $propietario = $persona->cc;
           
           $sql = $conexion->query("INSERT INTO `mascotas` "
                   . "(`nombre`, `genero`, `peso`, `tamano`, `color`, `raza`, `fecha_nac`, `tienevacunas`, `propietario`)"
                   . " VALUES ('$nombre', '$genero', '$peso', '$tamano', '$color', '$raza', '$fecha', '$vacuna', '$propietario')");
           if ($sql == 1) {
               echo ""
            . "<style> h2{color:green; position: relative; text-align: center;}"
                    . "</style>"
                    . "<h2>"
                    . "*MASCOTA REGISTRADA*"
                    . "</h2>";
               
           }
             else {
                 echo"Error al registrar mascota";
                 
             }
        }
}

?>

