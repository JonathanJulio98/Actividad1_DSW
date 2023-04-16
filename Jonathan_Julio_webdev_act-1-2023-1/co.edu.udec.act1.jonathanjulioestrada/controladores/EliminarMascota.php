<?php
    include '../co.edu.udec.desarrolloweb.jonathanjulio.util//Conectar.php';
    if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sql = $conexion->query("delete from mascotas where id='$id'");
    if ($sql == 1) {
        header("Location:../views/index.php");

    }else{
    }
}

?>

