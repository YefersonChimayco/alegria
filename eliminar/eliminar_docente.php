

<?php
include '../conexion/conexion.php';

$idDocente = $_GET['id'];

$query = "DELETE FROM docente WHERE idDocente='$idDocente'";

if(mysqli_query($conexion, $query)){
  

    header('Location: ../interfaces/in_docente.php');
}

mysqli_close($conexion);
?>
