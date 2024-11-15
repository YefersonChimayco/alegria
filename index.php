<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Calificaciones</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        
     body::-webkit-scrollbar {
  display: none; /* Chrome, Safari y Opera */
}
        body {
   width: 100%;
   font-family: Arial, sans-serif;
   margin: 0;
   padding: 0;
   background-color: #f7f7f7;
}
.h1{
   text-align: center;
   font-size: 40px;
   margin-bottom: 20px;   
}

.BOTON{
   display: flex;
   justify-content: center;
   margin-bottom: 5px;
   align-items: space-evenly;
}
.crear{
   background: red;
   padding: 10px 20px;
   border: none;
   border-radius: 5px;
   color: #fff;
   cursor: pointer;
   width: 120px;
   margin: 5px;
}
.container {
 width: 4000px;
   margin: 20px ;
   padding: 20px;
   background-color: #fff;
   border-radius: 8px;
   box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
   color: #333;
   margin-top: 0;
}

.table-container {
    width: auto;
   margin-top: 20px;
}

.table-container table {
   width: 100%;
   border-collapse: collapse;
   margin-bottom: 20px;
}

.table-container th, .table-container td {
   padding: 10px;
   border-bottom: 1px solid #ddd;
}

.table-container th {
   background-color: #f0f0f0;
   font-weight: bold;
   text-align: left;
}

    </style>
</head>
<link rel="stylesheet" href="styles.css">

    <body>

<!-- INICIO BARRA DE NAVEGACIÓN -->

<nav class="navbar bg-primary navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown" style="margin-left:30%;">
          <a class="nav-link dropdown-toggle" style="color: white;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            ESTUDIANTE
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="formularios/estudiante.php">CREAR ESTUDIANTE</a></li>
            <li><a class="dropdown-item" href="#">ACTUALIZAR ESTUDIANTE</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown" style="margin-left:30%;">
          <a class="nav-link dropdown-toggle" style="color: white;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            DOCENTE
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="formularios/docente.php">CREAR DOCENTE</a></li>
            <li><a class="dropdown-item" href="#">ACTUALIZAR DOCENTE</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown" style="margin-left:30%;">
          <a class="nav-link dropdown-toggle" style="color: white;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            CURSO
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="formularios/curso.php">CREAR CURSO</a></li>
            <li><a class="dropdown-item" href="#">ACTUALIZAR CURSO</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown" style="margin-left:30%;">
          <a class="nav-link dropdown-toggle" style="color: white;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            ROL
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="formularios/rol.php">CREAR ROL</a></li>
            <li><a class="dropdown-item" href="#">ACTUALIZAR ROL</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown" style="margin-left:30%;">
          <a class="nav-link dropdown-toggle" style="color: white;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            NOTA
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="formularios/nota.php">CREAR NOTA</a></li>
            <li><a class="dropdown-item" href="#">ACTUALIZAR NOTA</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown" style="margin-left:30%;">
          <a class="nav-link dropdown-toggle" style="color: white;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            USUARIO
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="formularios/usuarios.php">CREAR USUARIO</a></li>
            <li><a class="dropdown-item" href="#">ACTUALIZAR USUARIO</a></li>
        </li>      
    </div>
  </div>
</nav>


<!-- CARRUSEL -->
                

            <!-- FIN CARRUSEL -->
            

<!-- INICIO TABLAS -->

<?php
                // Incluir el archivo de conexión
                include 'conexion/conexion.php';

                // Consultas para obtener el contenido de las tablas
               

                $query_usuario = "SELECT * FROM usuario";
                $result_usuario = mysqli_query($conexion, $query_usuario);

               
              
              
                ?>
   <div class="presen">
    
    SISTEMA ACADEMICO
    <img src="https://cdn-icons-png.flaticon.com/512/2599/2599390.png" alt="" class="img">

</div>
<div id="productos">
    <div class="contenedor">
        <div class="contenido">
            <img src="img/profesor.jpg" alt="" width="220px" height="300px">
            <a href="interfaces/in_docente.php" class="btn btn-danger" style="margin-top: 10px;">PROFESORES</a>
        </div>
    </div>

    <div class="contenedor">
        <div class="contenido">
            <img src="img/estudiante.jpg" alt="" width="220px" height="300px">
            <a href="interfaces/in_estudiante.php" class="btn btn-danger" style="margin-top: 10px;">ESTUDIANTES</a>
        </div>
    </div>

    <div class="contenedor">
        <div class="contenido">
            <img src="img/cursoss.jpg" alt="" width="220px" height="300px">
            <a href="interfaces/in_curso.php" class="btn btn-danger" style="margin-top: 10px;">CURSOS</a>
        </div>
    </div>
    
    <div class="contenedor">
        <div class="contenido">
            <img src="img/nota.jpg" alt="" width="220px" height="300px">
            <a href="interfaces/in_calificaciones.php" class="btn btn-danger" style="margin-top: 10px;">CALIFICACIONES</a>
        </div>
    </div>

    <div class="contenedor">
        <div class="contenido">
            <img src="img/roll.jpg" alt="" width="220px" height="300px">
            <a href="interfaces/in_rol.php" class="btn btn-danger" style="margin-top: 10px;">ROL</a>
        </div>
    </div>

    <div class="contenedor">
        <div class="contenido">
            <img src="img/usuarios.jpg" alt="" width="220px" height="300px">
            <a href="interfaces/in_usuarios.php" class="btn btn-danger" style="margin-top: 10px;">USUARIO</a>
        </div>
    </div>
</div>
<h1 class="text-center"><strong>TABLAS GENERALES</strong></h1>



           
      

       
        
     


                <?php
                // Cerrar la conexión
                mysqli_close($conexion);
                ?>
            </div>
            </body>
<!-- FIN TABLAS MUESTRA-->


<!-- FIN BARRA DE NAVEGACIÓN -->

<!-- INICIO FOOTER -->

            <footer class="bg-dark text-white mt-3 p-3 text-center" style="padding: 0px 50px;">
                
                <div class="row text-center">
                    <div class="col-md-4">
                        <h5>Sobre Nosotros</h5>
                        <p>Somos una plataforma dedicada a la gestión eficiente de notas y roles para instituciones
                            educativas.</p>
                    </div>
                    <div class="col-md-4">
                        <h5>Enlaces Rápidos</h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">Inicio</a></li>
                            <li><a href="#" class="text-white">Contacto</a></li>
                            <li><a href="#" class="text-white">Términos y Condiciones</a></li>
                            <li><a href="#" class="text-white">Política de Privacidad</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h5>Contáctanos</h5>
                        <p>Email: pamelanels999@gmail.com</p>
                        <p>Teléfono: +51 978 965 546</p>
                    </div>
                </div>
                <hr class="bg-white">
                <p class="mb-0">&copy; 2024 Sistema de Registro de Calificaciones. Todos los derechos reservados.</p>
        
        </footer>

<!-- FIN FOOTER -->
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>