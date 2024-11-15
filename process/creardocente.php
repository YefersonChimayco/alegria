<?php
include '../conexion/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellidopaterno = $_POST["apellidopaterno"];
    $apellidomaterno = $_POST["apellidomaterno"];
    $telefono = $_POST["telefono"];

    $query = "INSERT INTO docente (NombreDocente, ApellidoPaterno, ApellidoMaterno, Telefono)
              VALUES ('$nombre', '$apellidopaterno', '$apellidomaterno', '$telefono')";

    if (mysqli_query($conexion, $query)) {
        header("Location: ../interfaces/in_docente.php");
        exit();
    } else {
        echo "Error al crear el docente: " . mysqli_error($conexion);
    }

    mysqli_close($conexion);
}
?>