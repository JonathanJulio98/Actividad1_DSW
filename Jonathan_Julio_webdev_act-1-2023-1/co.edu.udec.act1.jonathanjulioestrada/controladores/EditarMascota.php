<?php

if (!empty($_POST["btnmodificarm"])) {
        if (empty($_POST["lnombre"]) || empty($_POST["lgenero"]) 
                || empty($_POST["lpeso"]) 
                    || empty($_POST["ltamano"]) || empty($_POST["lcolor"]) 
                        || empty($_POST["lraza"]) || empty($_POST["lfechanac"]) 
                            || empty($_POST["lvacuna"])){ 
           echo ""
            . "<style> h2{color:red; position: relative; text-align: center; background-color: rgba(0,0,0,0.20};}"
                    . "</style>"
                    . "<h2>"
                    . "*Llene todo los campos*"
                    . "</h2>";
        }
        else{
            
            $nombre = $_POST["lnombre"];
            $genero = $_POST["lgenero"];
            $peso = $_POST["lpeso"];
            $tamano = $_POST["ltamano"];
            $color = $_POST["lcolor"];
            $raza = $_POST["lraza"];
            $fechanac = $_POST["lfechanac"];
            $vacunas = $_POST["lvacuna"];
            
            $sql = $conexion->query("update mascotas set nombre='$nombre', "
                    . "genero='$genero', peso='$peso', tamano='$tamano', "
                    . "color='$color', raza='$raza', fecha_nac='$fechanac', "
                    . "tienevacunas='$vacunas'where id=$id");
            if ($sql=1) {
                header("location:index.php");
            }
            else{
                echo 'Se produjo un error.';
            }
        }
}

?>
