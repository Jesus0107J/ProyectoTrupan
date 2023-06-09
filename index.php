<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda TRUPAN</title>
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
    crossorigin="anonymous">

    <link rel="stylesheet" href="css/estilos.css">

</head>
<body>
    <header>
        <div class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a href="../" class="navbar-brand">
                    <strong>Tienda TRUPAN</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarHeader" aria-controls="navbarHeader" 
                aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarHeader">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                Contáctanos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                Nosotros
                            </a>
                        </li>
                    </ul>
                    <a href="index.php" style="margin-right: 10px" class="btn btn-primary">Carrito</a>
                    <a href="/admin/clientes/" style="margin-right: 10px" class="btn btn-primary">Iniciar Sesión</a>
                    <a href="/admin/login/">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAMxJREFUSEvdVcERwjAMkyZgBGCTskmZjI7CCLBBuwFMIM659K4EjjiluSv4G1myYicmKgcr82MdApIaACcAO4fjHsCR5NmwLgeSLGnrIB8hPcl9iYACmMwWJOkJm00w4jTpk5PfEJDUkWzfOZnlICWKJBcAB5K36fmSAsZr5CZiYiGyAiOgYCQNanPfrUPAU/nE5R1AU3RFBQLXSP59k9PGLT6m//eSa/xF1siNZwAiZiAZdof3N7WFYw/JsxMGAG3Rwimo/AXqcrBqgQfSpJgZ4nkKpAAAAABJRU5ErkJggg=="/>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <?php
            $datosHTML="";
            include 'admin/configDB.php';
            $datos="";
            $query = "CALL MostrarServicios();";
            $sentencia = $conn->prepare($query);
            $sentencia->execute();
            $result = $sentencia->get_result();
        ?>

        <?php
            while ($resultA = $result->fetch_assoc()) {
                $cNombreServicio = $resultA["cNombreServicio"];
                $cDescripcion = $resultA["cDescripcion"];
                $nPrecioServicio = $resultA["nPrecioServicio"];
                $cRutaImagen = $resultA["cRutaImagenServicio"];
                $datosHTML= $datosHTML . "<div class='col-md-4'>
                                            <div class='card shadow-sm' style='padding:30px'>
                                                <img src='" . $cRutaImagen . "' alt='Productos y servicios' class='img-fluid img-fluidPri'>
                                                <div class='card-body text-center'>
                                                    <h2 class='TituloServicio'>" . $cNombreServicio . "</h2>
                                                    <hr>
                                                    <h3 class='DescripcionServicio'>" . $cDescripcion . "</h3>
                                                    <hr>
                                                    <h3 class='PrecioServicio'> S/" . $nPrecioServicio . "</h3>
                                                </div> 
                                            </div>
                                        </div>";
            
            };
        ?>

        <div class="row">
            <?php echo $datosHTML; ?>;
        </div>
    </main>

    <footer class="footer mt-auto py-2 bg-dark">
        <div class="container">
            <p class="text-center">
                <span class="text-white">&copy; <?php echo date('Y'); ?> <a>Todos los derechos reservados || Tienda Trupan</a></span>
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" 
    crossorigin="anonymous"></script>

</body>
</html>