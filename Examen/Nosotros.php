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
            background-color: #f49980;
            border-radius: 20px;
        }
        .centered-list {
            text-align: center;
            list-style-position: inside;
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
        <section class="container mt-5 p-3">
    <div id="nosotros" class="row d-flex justify-content-center align-items-center  mt-4">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2 class="text-black">Sobre Nosotros</h2>
            <br>
            <p class="justify-content-center text-left">PAN, ubicada en Salvatierra, Gto., brinda servicios principalmente en el Instituto Tecnológico Superior de Salvatierra 
                y considera atender pedidos de personas externas a través de redes sociales. Surge de la necesidad de los estudiantes de 
                acceder a snacks entre clases sin perder tiempo yendo a lugares distantes. Fundado por Paola Ayala B., Andrea Hernández V. 
                y Natalia Corona R., ofrece postres de calidad, priorizando la satisfacción del cliente. Comprometido con la sostenibilidad,
                busca minimizar su impacto ambiental y contribuir al bienestar comunitario.</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="img/logo.png" alt="" class="img-fluid rounded-pill" >
        </div>
    </div>
</section>
<section class="container mt-2 p-3">
    <div id="nosotros" class="row d-flex justify-content-center align-items-center">
        <div class="col-12">
            <h2 class="text-black text-center">Nuestra Misión</h2>
            <br>
            <p class="justify-content-center text-center">Proporcionar a los estudiantes opciones de postres deliciosos y económicos contribuyendo así a su bienestar y 
                energía durante sus jornadas académicas.</p>
        </div>
</section>
<section class="container mt-2 p-3">
    <div id="nosotros" class="row d-flex justify-content-center align-items-center">
        <div class="col-12">
            <h2 class="text-black text-center">Nuestra Visión</h2>
            <br>
            <p class="justify-content-center text-center">En nuestra visión, nos vemos como una marca que no solo satisface los antojos de postres, sino que también 
                ofrece una experiencia inolvidable a nuestros clientes. Esperamos que nuestra empresa sea reconocida, destacando por la calidad excepcional 
                de nuestros productos y nuestra constante innovación en sabores, presentaciones y técnicas de preparación.</p>
        </div>
</section>
<section class="container mt-2 p-3">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-12">
            <img src="img/Valores.jpeg" alt="" class="img-fluid rounded-pill" >
        </div>
    <div class="col-lg-6 col-md-6 col-sm-12 p-3 d-flex flex-column justify-content-center align-items-center">
    <h2 class="text-black text-center">Nuestros Valores</h2> <br>
            <ul class="text-black text-center justify-content-center centered-list">
                    <li>Creatividad</li>
                    <li>Calidad</li>
                    <li>Pasión por los clientes</li>
                    <li>Sostenibilidad</li>
                    <li>Inclusividad</li>
                    <li>Responsabilidad social</li>
                    <li>Autenticidad</li>
                    <li>Adaptibilidad</li>
                    <li>Integridad</li>
                    <li>Innovación</li>
                    <li>Colaboración</li>
                </ul>
    </div>
</div>
    
</section>
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
