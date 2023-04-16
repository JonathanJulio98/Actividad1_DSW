<?php
    include '../co.edu.udec.desarrolloweb.jonathanjulio.util//Conectar.php';
    if (!empty($_GET["cc"])) {
    $id = $_GET["cc"];
    $sql = $conexion->query("DELETE FROM `usuario` WHERE `usuario`.`cc` = $id");
    if ($sql == 1) {
        header("Location:../views/Login.php");

    }else{
    }
}

?>
