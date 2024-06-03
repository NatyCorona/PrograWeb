<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAN</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="Sevillana/Sevillana-Regular.ttf">
    <style>
        .custom-navbar {
            background-color: #fffcfb;
        }
        .catalogo {
            background-color: #fff1d8;
        }
        .nosotros {
            background-color: #fac69a;
        }
        @font-face {
            font-family: Philo;
            src: url(Philosopher/Philosopher-Regular.ttf);
        }
        body {
            font-family: Philo;
            font-size: medium;
        }
        footer {
            background-color:  #FFFBF5;
            padding: 10px 0;
            text-align: center;
        }
        .bttn {
            background-color: #DD8E4E;
            border-color: #DD8E4E;
        }
        .fullscreen {
            cursor: pointer;
        }
        section {
            margin-top: 5px;
        }
        .container-center {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .btn:hover {
            background-color: #f49980;
        }
    </style>
</head>
<body data-spy="scroll">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg custom-navbar fixed-top">
        <div class="container">
            <a class="navbar-brand" href="Index.php">
                <img src="img/logo.png" width="50" height="50" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="Index.php">Postres Shot</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="Index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Catalogo.php">Catálogo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Nosotros.php">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Galeria.php">Galeria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Contacto.php">Contacto</a>
                    </li>
                </ul>
                <span>
                    <a href="https://www.facebook.com/profile.php?id=61558317524655&mibextid=ZbWKwL" target="_blank" rel="noopener noreferrer">
                        <img src="icons/facebook.svg" alt="Facebook" width="24" height="24">
                    </a>
                    <a href="https://www.instagram.com/mini.delicias_pan?igsh=MTRpdnMwYnRuMGRobA==" target="_blank" rel="noopener noreferrer">
                        <img src="icons/instagram.svg" alt="Instagram" width="24" height="24">
                    </a>
                    <a href="https://www.tiktok.com/@losdenam?_t=8m8IhcRBUPd&_r=1" target="_blank" rel="noopener noreferrer">
                        <img src="icons/tiktok.svg" alt="Tiktok" width="24" height="24">
                    </a>
                </span>
            </div>
        </div>
    </nav>
    <main>
        <div class="container nosotros mt-5 container-center">
        <div class="col-8 mt-5">
            <div class="card mb-5">
                <div class="card-body">
                    <h4 class="card-title mt-4">Solicitud de Postre</h4>
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="apellidos" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                        </div>
                        <div class="mb-3">
                            <label for="correo" class="form-label">Correo</label>
                            <input type="email" class="form-control" id="correo" name="correo" required>
                        </div>
                        <div class="mb-3">
                            <label for="postre" class="form-label">Postre Solicitado</label>
                            <select class="form-control" id="postre" name="postre_codigo" required>
                                <?php
                                // Incluir archivo de conexión
                                include("conexion.php");

                                // Consultar postres
                                $sql_select_postres = "SELECT codigo, nombre FROM postres";
                                $result_postres = $conexion->query($sql_select_postres);

                                if ($result_postres->num_rows > 0) {
                                    while($row = $result_postres->fetch_assoc()) {
                                        echo "<option value='".$row['codigo']."'>".$row['nombre']."</option>";
                                    }
                                } else {
                                    echo "<option>No hay postres disponibles</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <button type="submit" class="btn bttn">Enviar Solicitud</button>
                    </form>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Obtener los datos del formulario y evitar inyecciones SQL
                        $nombre = $conexion->real_escape_string($_POST['nombre']);
                        $apellidos = $conexion->real_escape_string($_POST['apellidos']);
                        $correo = $conexion->real_escape_string($_POST['correo']);
                        $postre_codigo = $conexion->real_escape_string($_POST['postre_codigo']);

                        // Consulta SQL para insertar el usuario
                        $sql_insert = "INSERT INTO usuarios (nombre, apellidos, correo, postre_codigo) 
                                       VALUES ('$nombre', '$apellidos', '$correo', '$postre_codigo')";

                        // Ejecutar la consulta de inserción y verificar si se realizó correctamente
                        if ($conexion->query($sql_insert) === TRUE) {
                            ?>
                            <div  id="alerta"class="alert alert-success" role="alert">
                            Solicitud enviada
                      </div>
                      <?php
                        } else {
                            echo "<p>Error al enviar la solicitud: " . $conexion->error . "</p>";
                        }

                        // Cerrar la conexión
                        $conexion->close();
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    </main>
    <footer>
        <div class="row">
            <div class="col-12">
                <div class="social-icons">
                    <div class="row">
                        <div class="col-12">
                            <p>POSTRES SHOT</p>
                        </div>
                        <div class="col-6">
                            <a href="https://www.facebook.com/profile.php?id=61558317524655&mibextid=ZbWKwL" target="_blank" rel="noopener noreferrer">
                                <img src="icons/facebook.svg" alt="Facebook" width="24" height="24">
                            </a>
                            <a href="https://www.instagram.com/mini.delicias_pan?igsh=MTRpdnMwYnRuMGRobA==" target="_blank" rel="noopener noreferrer">
                                <img src="icons/instagram.svg" alt="Instagram" width="24" height="24">
                            </a>
                            <a href="https://www.tiktok.com/@losdenam?_t=8m8IhcRBUPd&_r=1" target="_blank" rel="noopener noreferrer">
                                <img src="icons/tiktok.svg" alt="Tiktok" width="24" height="24">
                            </a>
                        </div>
                        <div class="col-6">
                        <a href="Contacto.php" style="color: black; text-decoration: none;">Contáctanos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
document.addEventListener('DOMContentLoaded', function() {
    var alerta = document.getElementById('alerta');
    
    // Mostrar la alerta
    alerta.style.display = 'block';

    // Ocultar la alerta después de 3 segundos (3000 milisegundos)
    setTimeout(function() {
        alerta.style.display = 'none';
    }, 3000);
});
</script>
</body>
</html>
