<?php
include '../conexion/conexion.php';

// Consultas para obtener los datos de cursos, estudiantes y docentes
$query_curso = "SELECT idCurso, NombreCurso FROM curso";
$result_curso = mysqli_query($conexion, $query_curso);

$query_estudiante = "SELECT idEstudiante, NombreEstudiante FROM estudiante";
$result_estudiante = mysqli_query($conexion, $query_estudiante);

$query_docente = "SELECT idDocente, NombreDocente FROM docente";
$result_docente = mysqli_query($conexion, $query_docente);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nota</title>
    <link rel="stylesheet" href="../css/index.css">

    <style>
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
    max-width: 400px;
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
    select {
        font-size: 12px;
    }

    input[type="submit"] {
        font-size: 14px;
    }
}
    </style>
</head>
<body>
    <div class="container">
        <h1 class="h1">Crear Nota</h1>
        <form action="../process/crearnota.php" method="POST">
            <label for="valornota">Valor nota:</label>
            <input type="text" id="valornota" name="valornota" required>
            
            <label for="idCurso">Curso:</label>
            <select id="idCurso" name="idCurso" required>
                <?php while ($row = mysqli_fetch_assoc($result_curso)) { ?>
                    <option value="<?php echo $row['idCurso']; ?>"><?php echo $row['NombreCurso']; ?></option>
                <?php } ?>
            </select>

            <label for="idEstudiante">Estudiante:</label>
            <select id="idEstudiante" name="idEstudiante" required>
                <?php while ($row = mysqli_fetch_assoc($result_estudiante)) { ?>
                    <option value="<?php echo $row['idEstudiante']; ?>"><?php echo $row['NombreEstudiante']; ?></option>
                <?php } ?>
            </select>

            <label for="idDocente">Docente:</label>
            <select id="idDocente" name="idDocente" required>
                <?php while ($row = mysqli_fetch_assoc($result_docente)) { ?>
                    <option value="<?php echo $row['idDocente']; ?>"><?php echo $row['NombreDocente']; ?></option>
                <?php } ?>
            </select>
            
            <input type="submit" value="Crear">
            <a href="../index.php">Regresar</a>
         </form>
    </div>
</body>
</html>