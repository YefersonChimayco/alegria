<?php
// Incluir el archivo de conexión
include '../conexion/conexion.php';
include_once '../include/header.php';

$query = "SELECT usuario.idUsuario, usuario.nombreUsuario, usuario.usuario, usuario.clave, rol.NombreRol 
          FROM usuario 
          JOIN rol ON usuario.idRol = rol.idRol";
$result_usuario = mysqli_query($conexion, $query);
?>

<div class="container mt-4">
    <h2 class="text-center mb-4">Tabla de Usuarios</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Clave</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result_usuario)) { ?>
                    <tr>
                        <td><?php echo $row['idUsuario']; ?></td>
                        <td><?php echo $row['nombreUsuario']; ?></td>
                        <td><?php echo $row['usuario']; ?></td>
                        <td><?php echo $row['clave']; ?></td>
                        <td><?php echo $row['NombreRol']; ?></td>
                        <td>
                            <a href="eliminar/eliminar_usuario.php?id=<?php echo $row['idUsuario']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?');">
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
        <a class="btn btn-success col-5" href="../formularios/usuarios.php" role="button">REGISTRAR NUEVO USUARIO</a>
    </div>
</div>

<?php
include_once '../include/footer.php';
?>

?>

