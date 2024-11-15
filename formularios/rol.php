<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Rol</title>
    <link rel="stylesheet" href="../css/index.css">
    <style>
    
body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: linear-gradient(135deg, #74ebd5 0%, #acb6e5 100%);
}

.container {
    background: #fff;
    padding: 20px 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    width: 100%;
    text-align: center;
}

.h1 {
    margin-bottom: 20px;
    font-size: 24px;
    color: #333;
}

form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

label {
    font-size: 16px;
    color: #555;
    text-align: left;
}

input[type="text"] {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    transition: border-color 0.3s;
}

input[type="text"]:focus {
    border-color: #007BFF;
    outline: none;
}

input[type="submit"] {
    background: #007BFF;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

input[type="submit"]:hover {
    background: #0056b3;
}

a {
    color: #007BFF;
    text-decoration: none;
    font-size: 14px;
    transition: color 0.3s;
}

a:hover {
    color: #0056b3;
}

    </style>
</head>
<body>




    <div class="container">
        <h1 class="h1">Crear Rol</h1>
        <form action="../process/crearrol.php" method="POST">
            <label for="nombre">Nombre del Rol:</label>
            <input type="text" id="nombre" name="nombre">
            <input type="submit" value="Crear">
            <a href="../index.php">Regresar</a>
            
        </form>
     
    </div>

</body>
</html>