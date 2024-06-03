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
        <!-- Contenido principal -->
        <div class="container mt-5">
            <section class="catalogo p-3">
                <div class="row">
                    <div class="col-12">
                        <nav class="navbar">
                            <div class="container-fluid">
                                <h1 class="mt-3">Catálogo</h1>
                                <form class="d-flex" role="search">
                                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" name="query">
                                    <button class="btn bttn " type="submit">Buscar</button>
                                    <a href="?" class="btn bttn ms-2">Limpiar</a>
                                </form>
                            </div>
                        </nav>
                    </div>
                    <?php
            // Incluir archivo de conexión
            include("conexion.php");
            if ($conexion->connect_error) {
                die("Conexión fallida: " . $conexion->connect_error);
            }
            // Obtener el término de búsqueda
            $searchTerm = isset($_GET['query']) ? $_GET['query'] : '';
            if (!empty($searchTerm)) {
                // Escapar el término de búsqueda para prevenir inyecciones SQL
                $searchTerm = $conexion->real_escape_string($searchTerm);

                // Realizar la consulta a la base de datos
                $sql = "SELECT codigo, nombre, descripcion, ingredientes, preparacion, porciones, IMAGEN 
                        FROM postres 
                        WHERE nombre LIKE '%$searchTerm%'";
            } else {
                // Si no se ha realizado una búsqueda, mostrar todos los postres
                $sql = "SELECT codigo, nombre, descripcion, ingredientes, preparacion, porciones, IMAGEN FROM postres";
            }
            $resultSet = $conexion->query($sql);
            // Verificar si se encontraron resultados
            if ($resultSet->num_rows > 0) {
                while ($row = $resultSet->fetch_row()) {
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 mt-2">
                        <div class="card">
                            <img src="img/<?php echo $row[6] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row[1] ?></h5>
                                <p class="card-text"><?php echo $row[2] ?></p>
                                <button type="button" class="btn bttn" data-bs-toggle="modal" data-bs-target=<?php echo "\"#modal" . $row[0] . "\"" ?>>Receta</button>
                                <div class="modal fade" id=<?php echo "\"modal" . $row[0] . "\"" ?> tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo $row[1] ?></h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <strong>PORCIONES:</strong>  <?php echo $row[5] ?> <br>
                                                <strong>INGREDIENTES:</strong>  <br><?php echo $row[3] ?> <br>
                                                <strong>PREPARACIÓN:</strong>  <br> <?php echo $row[4] ?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn bttn" data-bs-dismiss="modal">Cerrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "<p>No se encontraron resultados.</p>";
            }
            ?>
                </div>
            </section>
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
</body>
</html>
