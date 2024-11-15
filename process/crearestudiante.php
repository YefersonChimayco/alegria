<?php
include '../conexion/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellidopaterno = $_POST["apellidopaterno"];
    $apellidomaterno = $_POST["apellidomaterno"];
    $dni = $_POST["dni"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $fechanacimiento = $_POST["fechanacimiento"];

    $query = "INSERT INTO estudiante (NombreEstudiante, ApellidoPaterno, ApellidoMaterno, Dni, Telefono, Correo, Fecha_Nacimiento)
              VALUES ('$nombre', '$apellidopaterno', '$apellidomaterno', '$dni', '$telefono', '$correo', '$fechanacimiento')";

    if (mysqli_query($conexion, $query)) {
        header("Location: ../interfaces/in_estudiante.php");
        exit();
    } else {
        echo "Error al crear el estudiante: " . mysqli_error($conexion);
    }

    mysqli_close($conexion);
}
?>