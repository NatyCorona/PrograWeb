<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PAN</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="Sevillana/Sevillana-Regular.ttf" />
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
     .bttn{
      background-color: #DD8E4E;
      border-color: #DD8E4E;
     }
     .fullscreen {
      cursor: pointer;
    }
    section{
      margin-top: 5px;
    }
    #alerta {
      display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1000;
    }
    </style>
  </head>
  <body data-spy="scroll">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg custom-navbar fixed-top">
      <div class="container">
        <a class="navbar-brand" href="Index.php">
          <img src="img/logo.png" width="50" height="50" alt="Logo" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link href="Index.php"">Postres Shot</a></li>
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
          <span >
            <a href="https://www.facebook.com/profile.php?id=61558317524655&mibextid=ZbWKwL" target="_blank" rel="noopener noreferrer"><img src="icons/facebook.svg" alt="Facebook" width="24" height="24"></a>
            <a href="https://www.instagram.com/mini.delicias_pan?igsh=MTRpdnMwYnRuMGRobA==" target="_blank" rel="noopener noreferrer"><img src="icons/instagram.svg" alt="Instagram" width="24" height="24"></a>
            <a href="https://www.tiktok.com/@losdenam?_t=8m8IhcRBUPd&_r=1" target="_blank" rel="noopener noreferrer"><img src="icons/tiktok.svg" alt="Tiktok" width="24" height="24"></a>
          </span>
        </div>
      </div>
    </nav>
    <main>
    <div class="container rounded mt-5">
            <!-- Formulario para insertar datos -->
            <div class="mt-3">
                <div class="card">
                    <div class="card-body nosotros mt-4">
                        <h4 class="card-title text-center">Agregar Nuevo Postre</h4>
                        <form action="" method="POST" enctype="multipart/form-data">
                          <div class="row">
                          <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                            <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
                                <label for="descripcion" class="form-label">Descripción</label>
                                <input type="text" class="form-control" id="descripcion" name="descripcion" required>
                            </div>
                            <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
                                <label for="ingredientes" class="form-label">Ingredientes</label>
                                <textarea class="form-control" id="ingredientes" name="ingredientes" rows="3" required></textarea>
                            </div>
                            <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
                                <label for="preparacion" class="form-label">Preparación</label>
                                <textarea class="form-control" id="preparacion" name="preparacion" rows="3" required></textarea>
                            </div>
                            <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
                                <label for="porciones" class="form-label">Porciones</label>
                                <input type="varchar" class="form-control" id="porciones" name="porciones" required>
                            </div>
                            <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
                                <label for="imagen" class="form-label">Imagen</label>
                                <input type="varchar" class="form-control" id="imagen" name="imagen" required>
                            </div>
                          </div>
                            <button type="submit" class="btn bttn" name="submit">Agregar</button>
                            <?php
                            // Incluir archivo de conexión
                            include("conexion.php");
                            if ($conexion->connect_error) {
                                die("Conexión fallida: " . $conexion->connect_error);
                            }
                            // Manejar inserción de datos
                            if (isset($_POST['submit'])) {
                                // Obtener datos del formulario y escapar caracteres especiales
                                $nombre = $conexion->real_escape_string($_POST['nombre']);
                                $descripcion = $conexion->real_escape_string($_POST['descripcion']);
                                $ingredientes = $conexion->real_escape_string($_POST['ingredientes']);
                                $preparacion = $conexion->real_escape_string($_POST['preparacion']);
                                $porciones = $conexion->real_escape_string($_POST['porciones']);
                                $imagen = $conexion->real_escape_string($_POST['imagen']);
                                // Insertar datos en la base de datos
                                $sql_insert = "INSERT INTO postres (nombre, descripcion, ingredientes, preparacion, porciones, IMAGEN) 
                                               VALUES ('$nombre', '$descripcion', '$ingredientes', '$preparacion', '$porciones', '$imagen')";             
                                if ($conexion->query($sql_insert) === TRUE) {
                                  ?>
                                  <div  id="alerta"class="alert alert-success" role="alert">
                                  Postre agregado correctamente.
                            </div>
                            <?php
                                } else {
                                    echo "<p>Error: " . $sql_insert . "<br>" . $conexion->error . "</p>";
                                }
                            }
                            ?>
                        </form>
                    </div>
                </div>
        </div>
      </div>
      <div class="container rounded">
        <div class="col-12 mt-3">
          <div class="card">
            <div class="card-body catalogo">
                <h4 class="card-title text-center">Modificar Postre</h4>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nombre_busqueda" class="form-label">Buscar por Nombre</label>
                        <input type="text" class="form-control" id="nombre_busqueda" name="nombre_busqueda" required>
                    </div>
                    <button type="submit" class="btn bttn" name="buscar">Buscar</button>
                </form>
            </div>
        </div>
        <?php
// Incluir archivo de conexión
include("conexion.php");

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Verificar si se ha enviado el formulario de búsqueda
if (isset($_POST['buscar'])) {
    // Obtener el nombre de búsqueda y evitar inyecciones SQL
    $nombre_busqueda = $conexion->real_escape_string($_POST['nombre_busqueda']);
    
    // Consultar postre por nombre
    $sql_select = "SELECT * FROM postres WHERE nombre LIKE '%$nombre_busqueda%'";
    $result = $conexion->query($sql_select);

    // Verificar si se encontraron resultados
    if ($result->num_rows > 0) {
        // Obtener el primer postre encontrado
        $postre = $result->fetch_assoc();
        ?>
        <div class="container rounded">
            <div class="col-lg-12 mt-3">
                <div class="card">
                    <div class="card-body catalogo">
                        <h4 class="card-title text-center">Modificar Postre</h4>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="nombre_original" value="<?php echo $postre['Nombre']; ?>">
                            <input type="hidden" name="codigo" value="<?php echo $postre['Codigo']; ?>">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $postre['Nombre']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="descripcion" class="form-label">Descripción</label>
                                <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $postre['Descripcion']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="ingredientes" class="form-label">Ingredientes</label>
                                <textarea class="form-control" id="ingredientes" name="ingredientes" rows="3" required><?php echo $postre['Ingredientes']; ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="preparacion" class="form-label">Preparación</label>
                                <textarea class="form-control" id="preparacion" name="preparacion" rows="3" required><?php echo $postre['Preparacion']; ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="porciones" class="form-label">Porciones</label>
                                <input type="text" class="form-control" id="porciones" name="porciones" value="<?php echo $postre['Porciones']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="imagen" class="form-label">Imagen</label>
                                <input type="text" class="form-control" id="imagen" name="imagen" value="<?php echo $postre['IMAGEN']; ?>" required>
                            </div>
                            <button type="submit" class="btn bttn" name="update">Actualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
    } else {
      ?>
      <div id="alerta" class="alert alert-danger" role="alert">
      No se encontró ningún postre con ese nombre.
</div>
<?php
    }
}

// Manejar actualización de datos
if (isset($_POST['update'])) {
    // Obtener los datos actualizados del formulario y evitar inyecciones SQL
    $codigo = $conexion->real_escape_string($_POST['codigo']);
    $nombre_original = $conexion->real_escape_string($_POST['nombre_original']); // Nombre original del postre
    $nombre = $conexion->real_escape_string($_POST['nombre']);
    $descripcion = $conexion->real_escape_string($_POST['descripcion']);
    $ingredientes = $conexion->real_escape_string($_POST['ingredientes']);
    $preparacion = $conexion->real_escape_string($_POST['preparacion']);
    $porciones = $conexion->real_escape_string($_POST['porciones']);
    $imagen = $conexion->real_escape_string($_POST['imagen']);

    // Consulta SQL para actualizar el postre
    $sql_update = "UPDATE postres SET 
                   Nombre = '$nombre', 
                   Descripcion = '$descripcion', 
                   Ingredientes = '$ingredientes', 
                   Preparacion = '$preparacion', 
                   Porciones = '$porciones', 
                   IMAGEN = '$imagen' 
                   WHERE nombre = '$nombre_original'"; // Actualizar donde el nombre sea igual al original

    // Ejecutar la consulta de actualización y verificar si se realizó correctamente
    if ($conexion->query($sql_update) === TRUE) {
      ?>
      <div  id="alerta" class="alert alert-success" role="alert">
      Actualización exitosa.
</div>
<?php
    } else {
      ?>
      <div  id="alerta"class="alert alert-danger" role="alert">
      Error al actualizar.
</div>
<?php
    }
}
?>
    </div>
    <div class="container rounded mt-3 nosotros p-3">
    <h4 class="card-title text-center">Eliminar Postre</h4>
    <?php
// Incluir archivo de conexión
include("conexion.php");

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

if(isset($_POST['eliminar'])){
    // Obtener el nombre del postre a eliminar
    $nombre_eliminar = $conexion->real_escape_string($_POST['nombre_eliminar']);

    // Consulta SQL para verificar si el postre existe
    $sql_verificar = "SELECT * FROM postres WHERE nombre = '$nombre_eliminar'";
    $result_verificar = $conexion->query($sql_verificar);

    if ($result_verificar->num_rows > 0) {
        // El postre existe, proceder con la eliminación
        // Consulta SQL para eliminar el postre
        $sql_delete = "DELETE FROM postres WHERE nombre = '$nombre_eliminar'";

        // Ejecutar la consulta de eliminación y verificar si se realizó correctamente
        if ($conexion->query($sql_delete) === TRUE) {
          ?>
          <div  id="alerta" class="alert alert-success" role="alert">
          Postre eliminado correctamente.
    </div>
    <?php
        } else {
          ?>
          <div  id="alerta"class="alert alert-danger" role="alert">
          Error al eliminar.
    </div>
    <?php
        }
    } else {
        // El postre no existe, mostrar un mensaje de error
        ?>
      <div  id="alerta"class="alert alert-danger" role="alert">
      El postre no existe.
</div>
<?php
    }
}
?>

<!-- Formulario para ingresar el nombre del postre a eliminar -->

<form action="" method="POST">
    <div class="mb-3">
        <label for="nombre_eliminar" class="form-label">Nombre del postre a eliminar</label>
        <input type="text" class="form-control" id="nombre_eliminar" name="nombre_eliminar" required>
    </div>
    <button type="submit" class="btn btn-danger" name="eliminar">Eliminar</button>
</form>

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
                            <div class="col-12">
                                <a href="https://www.facebook.com/profile.php?id=61558317524655&mibextid=ZbWKwL" target="_blank" rel="noopener noreferrer"><img src="icons/facebook.svg" alt="Facebook" width="24" height="24"></a>
                                <a href="https://www.instagram.com/mini.delicias_pan?igsh=MTRpdnMwYnRuMGRobA==" target="_blank" rel="noopener noreferrer"><img src="icons/instagram.svg" alt="Instagram" width="24" height="24"></a>
                                <a href="https://www.tiktok.com/@losdenam?_t=8m8IhcRBUPd&_r=1" target="_blank" rel="noopener noreferrer"><img src="icons/tiktok.svg" alt="Tiktok" width="24" height="24"></a>
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
