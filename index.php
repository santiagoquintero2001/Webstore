<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>The Good Cookies</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-casual.min.css" rel="stylesheet">

</head>

<body>

  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-lower">The Good Cookies</span>
  </h1>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="store.html">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="page-section clearfix">
    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/galletas-intro.jpg" alt="">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">Fresh baked cookies</span>
            <span class="section-heading-lower">Made with love</span>
          </h2>
          <p class="mb-3">Each flavor is a different world, a unique sensation, it's simply something that most be experienced. This cookies are made with ingredients of the highest quality and without a doubt lots of love.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-lower">Cookies</span>
            </h2>
            <?php
    
              //Rutina para consultar todos los datos de una tabla

              //1. Incluir el archivo BaseDatos.php (Para poder usar la clase)
              include("BaseDatos.php");

              //2. Crear un objeto de la clase BaseDatos
              $transaccion=new BaseDatos();
              
              //3. Escribir una consulta SQL para buscar datos(La que usted necesite)
              $consultaSQL="SELECT * FROM productos";

              //4. Utilizar el metodo consultarDatos de mi BaseDatos
              $productos=$transaccion->consultarDatos($consultaSQL);
            ?>

            <div class="container">
                <div class="row row-cols-1 row-cols-md-3">
                    <?php foreach($productos as $producto): ?>
                        <div class="col mb-4">
                            <div class="card h-100">
                                <img src="<?php echo($producto["foto"])?>" class="card-img-top" alt="fotoscard">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $producto["nombre"] ?></h5>
                                    <p class="card-text"><?= $producto["descripcion"] ?></p>
                                    <p class="card-text">Cantidad: <?= $producto["cantidad"] ?></p>
                                    <p class="card-text">Precio: <?= $producto["precio"] ?></p>
                                    <a href="eliminarProductos.php?id=<?= ($producto["idProducto"])?>" class="btn btn-danger">Eliminar</a>
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo($producto["idProducto"])?>">
                                        Editar
                                    </button>
                                </div>
                            </div>

                            <div class="modal fade" id="editar<?php echo($producto["idProducto"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edición</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="gestionarProductos.php?id=<?php echo($producto["idProducto"])?>" method="POST">
                                                <div class="form-group">
                                                    <label>Nombre:</label>
                                                    <input type="text" class="form-control" name="nombreEditar" value="<?php echo($producto["nombre"])?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Descripcion:</label>
                                                    <textarea class="form-control" rows="3" name="descripcionEditar"><?php echo($producto["descripcion"])?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Cantidad:</label>
                                                    <input type="text" class="form-control" name="cantidadEditar" value="<?php echo($producto["cantidad"])?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Precio:</label>
                                                    <input type="text" class="form-control" name="precioEditar" value="<?php echo($producto["precio"])?>">
                                                </div>
                                                <button type="submit" class="btn btn-info" name="botonEditar">Enviar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">Copyright &copy;</p>
      <p class="m-0 small">santi.quintero67@gmail.com</p>
      <p class="m-0 small"></p>Sabaneta</p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
