<?php
// Incluir el archivo de conexión
include '../conexion/conexion.php';
include_once '../include/header.php';

$query_estudiante = "SELECT * FROM estudiante";
$result_estudiante = mysqli_query($conexion, $query_estudiante);
?>

<div class="container mt-4">
    <h2 class="text-center mb-4">Tabla de Estudiantes</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>DNI</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th>Fecha Nacimiento</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result_estudiante)) { ?>
                    <tr>
                        <td><?php echo $row['idEstudiante']; ?></td>
                        <td><?php echo $row['NombreEstudiante']; ?></td>
                        <td><?php echo $row['ApellidoPaterno']; ?></td>
                        <td><?php echo $row['ApellidoMaterno']; ?></td>
                        <td><?php echo $row['Dni']; ?></td>
                        <td><?php echo $row['Telefono']; ?></td>
                        <td><?php echo $row['Correo']; ?></td>
                        <td><?php echo $row['Fecha_Nacimiento']; ?></td>
                        <td>
                            <a href="../eliminar/eliminar_estudiante.php?id=<?php echo $row['idEstudiante']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este estudiante?');">
                                <i class="fa-solid fa-trash-can"></i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<div class="d-flex justify-content-between mt-3">
        <a class="btn btn-primary col-5" href="../index.php" role="button">Volver al MENÚ</a>
        <a class="btn btn-danger col-5" href="../formularios/estudiante.php" role="button">REGISTRAR NUEVO ESTUDIANTE</a>
    </div>

<?php
include_once '../include/footer.php';
?>

