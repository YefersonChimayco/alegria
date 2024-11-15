<?php
// Incluir el archivo de conexión
include '../conexion/conexion.php';
include_once '../include/header.php';

$query_docente = "SELECT * FROM docente";
$result_docente = mysqli_query($conexion, $query_docente);
?>
<div class="container mt-4">
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result_docente)) { ?>
                    <tr>
                        <td><?php echo $row['idDocente']; ?></td>
                        <td><?php echo $row['NombreDocente']; ?></td>
                        <td><?php echo $row['ApellidoPaterno']; ?></td>
                        <td><?php echo $row['ApellidoMaterno']; ?></td>
                        <td><?php echo $row['Telefono']; ?></td>
                        <td>
                            <a href="../eliminar/eliminar_docente.php?id=<?php echo $row['idDocente']; ?>" class="btn btn-danger btn-sm">
                                Eliminar <i class="fa-solid fa-trash-can"></i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-between mt-3">
        <a class="btn btn-primary col-5" href="../index.php" role="button">Volver al MENÚ</a>
        <a class="btn btn-danger col-5" href="../formularios/docente.php" role="button">REGISTRAR NUEVO DOCENTE</a>
    </div>
</div>
<?php
include_once '../include/footer.php';
?>
