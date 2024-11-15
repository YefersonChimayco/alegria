<?php
// Incluir el archivo de conexión
include '../conexion/conexion.php';
include_once '../include/header.php';

$query_rol = "SELECT idRol, NombreRol FROM rol";
$result_rol = mysqli_query($conexion, $query_rol);
?>

<div class="container mt-4">
    <h2 class="text-center mb-4">Tabla de Roles</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result_rol)) { ?>
                    <tr>
                        <td><?php echo $row['idRol']; ?></td>
                        <td><?php echo $row['NombreRol']; ?></td>
                        <td>
                            <a href="eliminar/eliminar_rol.php?id=<?php echo $row['idRol']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este rol?');">
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
        <a class="btn btn-success col-5" href="../formularios/rol.php" role="button">REGISTRAR NUEVO ROL</a>
    </div>
</div>

<?php
include_once '../include/footer.php';
?>

