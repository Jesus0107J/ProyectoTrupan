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
<style>
/* Estilo para el menú desplegable */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Estilo para el enlace del menú desplegable */
.dropdown button {
  background-color: #4CAF50;
  color: white;
  padding: 10px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* Estilo para el contenido del menú desplegable */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Estilo para los elementos del menú desplegable */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Estilo para resaltar el elemento seleccionado */
.dropdown-content a:hover {
  background-color: #f1f1f1;
}

/* Mostrar el menú desplegable al pasar el cursor sobre él */
.dropdown:hover .dropdown-content {
  display: block;
}
</style>
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
                    <a href="admin/pedidos/mostrarPedido.php" style="margin-right: 10px" class="btn btn-primary">Carrito</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(247, 247, 247, 0.96);transform: scaleX(-1);msFilter:progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1);"><path d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z"></path></svg>
                    <div class="dropdown">
                        <a style="color: white" name="cCorreoCliente">achamorro@gmail.com</a>
                        <div class="dropdown-content">
                            <a href="admin/clientes/mostrarCliente.php">Perfil</a>
                            <a href="../">Cerrar Sesión</a>
                        </div>
                    </div>
                    <a style="margin-left: 10px" href="/admin/login/">
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
                                                    <hr>
                                                    <div class='d-grid gap-3 col-12'>
                                                    <a href='admin/pedidos/index.php?idservicio=" . $resultA["idservicio"] . "' class='btn btn-warning'>Ver</a>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>";
            
            };
        ?>

        <div class="row">
            <?php echo $datosHTML; ?>;
        </div>
    </main>

    <script>
        function AbrirFormularioEditar(){
        $.get("/admin/clientes/actualizarClienteJ.php",function(data){
            $("#MiModalHeaderT").html("Registrate para obtener descuentos exclusivos!");
            $("#MiModalBody").html(data);
            $("#MiModal").modal("show");
        });
    }
    </script>

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