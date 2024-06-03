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
            border-radius: 20px;
        }
        .nosotros {
            background-color: #fac69a;
            border-radius: 20px;
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
            background-color: #FFFBF5;
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
    <div class="container">
            <div class="row ">
                <div class="col-12">
                    <div id="carouselExampleIndicators" class="carousel slide" >
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" ></button>
                          <button data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2">
                          </button>
                          <button
                            type="button"
                            data-bs-target="#carouselExampleIndicators"
                            data-bs-slide-to="2"
                            aria-label="Slide 3"
                          ></button>
                          <button
                            type="button"
                            data-bs-target="#carouselExampleIndicators"
                            data-bs-slide-to="3"
                            aria-label="Slide 4"
                          ></button>
                        </div>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img
                              src="img/Postre1.jpeg"
                              class="d-block w-100 max-height-80"
                              alt="..."
                            />
                          </div>
                          <div class="carousel-item">
                            <img
                              src="img/Postre2.jpeg"
                              class="d-block w-100 max-height-70"
                              alt="..."
                            />
                          </div>
                          <div class="carousel-item">
                            <img
                              src="img/Postre3.jpeg"
                              class="d-block w-100 max-height-80"
                              alt="..."
                            />
                          </div>
                          <div class="carousel-item">
                            <img
                              src="img/Postre4.jpeg"
                              class="d-block w-100 max-height-90"
                              alt="..."
                            />
                          </div>
                        </div>
                        <button
                          class="carousel-control-prev"
                          type="button"
                          data-bs-target="#carouselExampleIndicators"
                          data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button
                          class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                          data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                    </div>
                </div>
            </div>
        <!-- Contenido principal -->
        <div class="container">
            <section class="catalogo p-3">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 p-3 d-flex flex-column justify-content-center align-items-center">
                            <img src="img/Collage.png"class="rounded-pill img-fluid" alt="Logo de PAN">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 p-3 d-flex flex-column justify-content-center align-items-center">
                            <h3 >Catálogo</h3>
                            <p class="mt-3">¿Estás listo para un viaje culinario lleno de sabores tentadores y texturas irresistibles? En "PAN", cada uno de nuestros productos es una obra maestra de la repostería, cuidadosamente elaborada para deleitar tus sentidos y satisfacer tus antojos más dulces. Descubre la magia detrás de cada postre.</p>
                            <a href="Catalogo.php" class="btn bttn mt-3">Ver catálogo</a>
                        </div>
                    </div>
            </section>
        </div>
        <!-- Nosotros -->
        <div class="container">
            <section class="nosotros p-3">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 p-3 d-flex flex-column justify-content-center align-items-center">
                            <h3>Nosotros</h3>
                            <p class="mt-3">¿Alguna vez te has preguntado cómo una simple idea puede convertirse en una deliciosa realidad? La historia de "PAN" es un viaje fascinante que comenzó con una pasión por la repostería y el deseo de traer sonrisas a través de nuestros postres en vaso. ¡Ven y descubre la dulce historia detrás de cada bocado de "PAN"!</p>
                            <a href="Nosotros.php" class="btn bttn mt-3">Conoce PAN</a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 p-3 d-flex flex-column justify-content-center align-items-center">
                            <img src="img/logo.png"class="rounded-pill img-fluid" alt="Logo de PAN">
                        </div>
                    </div>
            </section>
        </div>
        <!-- Galeria -->
        <div class="container">
            <section class="catalogo p-3">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 p-3 d-flex flex-column justify-content-center align-items-center">
                            <img src="img/Galeria.png"class="rounded-pill img-fluid" alt="Logo de PAN">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 p-3 d-flex flex-column justify-content-center align-items-center">
                            <h3 >Galeria</h3>
                            <p class="mt-3">¿Estás listo para dejarte tentar visualmente? Explora nuestra galería y déjate cautivar por la belleza y la creatividad de nuestros productos. ¡Prepárate para un viaje visual que te dejará anhelando probar cada bocado!</p>
                            <a href="Galeria.php" class="btn bttn mt-3">Visitar galeria</a>
                        </div>
                    </div>
            </section>
        </div>
        <!-- Contactanos -->
        <div class="container">
            <section class="nosotros p-3">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 p-3 d-flex flex-column justify-content-center align-items-center">
                            <h3>Contactanos</h3>
                            <p class="mt-3">¿Listo para dar el siguiente paso y llevar tu experiencia con "PAN" al siguiente nivel? ¡Contáctanos hoy mismo para descubrir cómo puedes disfrutar de nuestros deliciosos postres en vaso! ¡Únete a nuestra comunidad de amantes de los postres y deja que la dulzura comience en tus redes sociales!</p>
                            <a href="Contacto.php" class="btn bttn mt-3">Ver Contacto</a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 p-3 d-flex flex-column justify-content-center align-items-center">
                            <img src="img/Contactanos.png"class="rounded-pill img-fluid" alt="Logo de PAN">
                        </div>
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
