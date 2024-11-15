<?php
// Incluir el archivo de conexión
include '../conexion/conexion.php';
include_once '../include/header.php';

$query_curso = "SELECT * FROM curso";
$result_curso = mysqli_query($conexion, $query_curso);
?>

<div class="container mt-4">
    <h2 class="text-center mb-4">Tabla de Cursos</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result_curso)) { ?>
                    <tr>
                        <td><?php echo $row['idCurso']; ?></td>
                        <td><?php echo $row['NombreCurso']; ?></td>
                        <td><?php echo $row['EstadoCurso']; ?></td>
                        <td>
                            <a href="eliminar/eliminar_curso.php?id=<?php echo $row['idCurso']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este curso?');">
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
        <a class="btn btn-danger col-5" href="../formularios/curso.php" role="button">REGISTRAR NUEVO CURSO</a>
    </div>
</div>

<?php
include_once '../include/footer.php';
?>

