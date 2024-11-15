<?php
// Incluir el archivo de conexión
include '../conexion/conexion.php';
include_once '../include/header.php';

$query_nota = "SELECT * FROM nota";
$result_nota = mysqli_query($conexion, $query_nota);
?>

<div class="container mt-4">
    <h2 class="text-center mb-4">Tabla de Notas</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Valor</th>
                    <th>Curso</th>
                    <th>Estudiante</th>
                    <th>Docente</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result_nota)) { ?>
                    <tr>
                        <td><?php echo $row['ValorNota']; ?></td>
                        <td><?php echo $row['idCurso']; ?></td>
                        <td><?php echo $row['idEstudiante']; ?></td>
                        <td><?php echo $row['idDocente']; ?></td>
                        <td>
                            <a href="../eliminar/eliminar_nota.php?id=<?php echo $row['idNota']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar esta nota?');">
                                <i class="fa-solid fa-trash-can"></i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-between mt-3">
        <a class="btn btn-primary col-5" href="../index.php" role="button">Volver al MENÚ</a>
        <a class="btn btn-danger col-5" href="../formularios/nota.php" role="button">REGISTRAR NUEVA NOTA</a>
    </div>
</div>

<?php
include_once '../include/footer.php';
?>
