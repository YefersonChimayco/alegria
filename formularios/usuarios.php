<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
    <link rel="stylesheet" href="../css/index.css">
    <style>
        /* Estilos generales */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background: #fff;
    padding: 20px 40px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 500px;
    width: 100%;
    box-sizing: border-box;
}

.h1 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
    text-align: center;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    font-size: 16px;
    margin-bottom: 5px;
    color: #555;
}

input[type="text"],
input[type="password"],
select {
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 14px;
    width: 100%;
    box-sizing: border-box;
    transition: border-color 0.3s ease;
}

input[type="text"]:focus,
input[type="password"]:focus,
select:focus {
    border-color: #7d7dff;
    outline: none;
}

input[type="submit"] {
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    background-color: #5cb85c;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #4cae4c;
}

a {
    display: inline-block;
    margin-top: 10px;
    text-align: center;
    color: #5cb85c;
    text-decoration: none;
    transition: color 0.3s ease;
}

a:hover {
    color: #4cae4c;
}

/* Botón grande */
.btn.btn-primary.btn-lg {
    padding: 10px 20px;
    font-size: 18px;
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn.btn-primary.btn-lg:hover {
    background-color: #0056b3;
}

/* Estilos para dispositivos móviles */
@media (max-width: 600px) {
    .container {
        padding: 20px;
    }

    .h1 {
        font-size: 20px;
    }

    label {
        font-size: 14px;
    }

    input[type="text"],
    input[type="password"],
    select {
        font-size: 12px;
    }

    input[type="submit"] {
        font-size: 14px;
    }

    .btn.btn-primary.btn-lg {
        font-size: 16px;
    }
}

    </style>
</head>
<body>


    <div class="container">
        <h1 class="h1">Crear Usuario</h1>
        <form action="../process/crearusuario.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre">
            
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario">
            
            <label for="clave">Clave:</label>
            <input type="password" id="clave" name="clave">
            
            <label for="rol">Rol:</label>
            <select id="rol" name="rol">
                <?php 
                include '../conexion/conexion.php';
                $query_rol = "SELECT idRol, NombreRol FROM rol";
                $result_rol = mysqli_query($conexion, $query_rol);
                while ($row = mysqli_fetch_assoc($result_rol)) { ?>
                    <option value="<?php echo $row['idRol']; ?>"><?php echo $row['NombreRol']; ?></option>
                <?php } ?>
            </select>

            <input type="submit" value="Crear">

            <a href="../index.php">Regresar</a>
        </form>
    </div>
</body>
</html> 