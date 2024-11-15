<?php
include '../conexion/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valornota = $_POST["valornota"];
    $idCurso = $_POST["idCurso"];
    $idEstudiante = $_POST["idEstudiante"];
    $idDocente = $_POST["idDocente"];

    $query = "INSERT INTO nota (ValorNota, idCurso, idEstudiante, idDocente) 
              VALUES ('$valornota', '$idCurso', '$idEstudiante', '$idDocente')";

    if (mysqli_query($conexion, $query)) {
        header("Location: .../interfaces/in_rol.php");
        exit();
    } else {
        echo "Error al crear la nota: " . mysqli_error($conexion);
    }

    mysqli_close($conexion);
}
?>

<div class="container">
        <h1 class="h1">Crear Rol</h1>
        <form action="../process/crearrol.php" method="POST">
            <label for="nombre">Nombre del Rol:</label>
            <input type="text" id="nombre" name="nombre">
            <input type="submit" value="Crear">
            <a href="../index.php">Regresar</a>
            
        </form>
     
    </div>