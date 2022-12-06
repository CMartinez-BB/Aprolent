<?php  
    include('./connection.php');

    $conexion -> query('DELETE  FROM alumnos WHERE id='.$_POST['id']) or die($conexion->error);
    echo'okey'.$_POST['id'];

?>