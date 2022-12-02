<?php
    include("./connection.php");

    // Condition to change user
    if (isset($_POST['nombre']) && isset($_POST['curso']) && isset($_POST['status'])){
        $conexion -> query("UPDATE alumnos SET
            nombre = '".$_POST['nombre']."',
            curso = '".$_POST['curso']."',
            status = '".$_POST['status']."'

            WHERE id=".$_POST['id']);
    }
    header('location: ../templates/admin/admin.php');
 ?>