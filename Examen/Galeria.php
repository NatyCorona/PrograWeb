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
       
        section {
            margin-top: 5px;
        }
        
    .gallery {
      position: relative;
      display: inline-block;
    }
    .gallery-img {
      cursor: pointer;
      transition: transform 0.3s;
    }
    .gallery:hover .gallery-img {
      transform: scale(1.05);
    }
    .gallery:hover .tooltip {
      visibility: visible;
      opacity: 1;
    }
    .tooltip {
      visibility: hidden;
      opacity: 0;
      background-color: rgba(0, 0, 0, 0.7);
      color: #fff;
      text-align: center;
      border-radius: 5px;
      padding: 5px 10px;
      position: absolute;
      z-index: 1;
      bottom: 100%;
      left: 50%;
      transform: translateX(-50%);
      transition: opacity 0.3s;
    }
    .fullscreen {
      margin-top: 40px;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.8);
      z-index: 1000;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .fullscreen img,
    .fullscreen video {
      max-width: 90%;
      max-height: 90%;
    }
    .fullscreen-content {
            max-width: 90vw; /* Ancho máximo proporcional al ancho de la ventana */
            max-height: 90vh; /* Altura máxima proporcional al alto de la ventana */
        }
    .tooltip {
            position: absolute;
            bottom: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 5px 10px;
            border-radius: 0 0 5px 5px;
            transition: opacity 0.3s;
            opacity: 0;
        }
        .gallery:hover .tooltip {
            opacity: 1;
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
        <div class="container catalogo mt-5 p-3">
  <section class="mt-4">
    <h1 class="mt-2">Galería</h1>
    <div class="row">
      <div class="col-lg-4 col-md-6 mt-2">
        <div class="gallery">
          <img src="img/Mango.jpeg" class="img-fluid gallery-img shadow-1-strong rounded mb-4" >
          <div class="tooltip">Carlota de Mango</div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt-2">
        <div class="gallery">
          <img src="img/Oreo.jpeg" class="img-fluid rounded gallery-img shadow-1-strong rounded mb-4">
          <div class="tooltip">Cheesecake de Oreo</div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt-2">
        <div class="gallery">
          <img src="img/Limon.jpeg" class="img-fluid gallery-img shadow-1-strong rounded mb-4">
          <div class="tooltip">Carlota de Limón</div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt-2">
        <div class="gallery">
          <img src="img/cafe.jpeg" class="img-fluid gallery-img shadow-1-strong rounded mb-4" >
          <div class="tooltip">Carlota de Café</div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt-2">
        <div class="gallery">
          <img src="img/fresa.jpeg" class="img-fluid gallery-img shadow-1-strong rounded mb-4">
          <div class="tooltip">Cheesecake de Fresa</div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt-2">
        <div class="gallery">
          <img src="img/Chocotorta.jpeg" class="img-fluid gallery-img shadow-1-strong rounded mb-4">
          <div class="tooltip">Chocotorta</div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 d-lg-block d-sm-block mt-2">
        <div class="gallery">
          <video class="embed-responsive-item w-100 shadow-1-strong gallery-img rounded mb-4" controls>
            <source src="img/Postre1.mp4" type="video/mp4">
          </video>
          <div class="tooltip">Cheesecake de Oreo</div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 d-lg-block d-sm-block mt-2">
        <div class="gallery">
          <video class="embed-responsive-item w-100 shadow-1-strong gallery-img rounded mb-4" controls>
            <source src="img/Postre2.mp4" type="video/mp4">
          </video>
          <div class="tooltip">Cheesecake de Chocolate</div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 d-lg-block d-sm-block d-md-none mt-2">
        <div class="gallery">
          <video class="embed-responsive-item w-100 shadow-1-strong gallery-img rounded mb-4" controls>
            <source src="img/Postre3.mp4" type="video/mp4">
          </video>
          <div class="tooltip">Cheesecake de Fresa</div>
        </div>
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
    <script>
        document.querySelectorAll('.gallery-img').forEach(item => {
            item.addEventListener('click', event => {
                const fullscreenDiv = document.createElement('div');
                fullscreenDiv.classList.add('fullscreen');
                if (item.tagName === 'IMG') {
                    const imgClone = item.cloneNode();
                    fullscreenDiv.appendChild(imgClone);
                } else if (item.tagName === 'VIDEO') {
                    const videoClone = item.cloneNode(true);
                    videoClone.controls = true;
                    fullscreenDiv.appendChild(videoClone);
                }
                document.body.appendChild(fullscreenDiv);

                fullscreenDiv.addEventListener('click', () => {
                    fullscreenDiv.remove();
                });
            });

            // Añadir el nombre en la esquina inferior
            const tooltip = document.createElement('div');
            tooltip.classList.add('tooltip');
            tooltip.textContent = item.getAttribute('alt'); // Obtener el atributo alt de la imagen
            item.parentNode.appendChild(tooltip);
        });
    </script>

</body>
</html>
