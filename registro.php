
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
<body class="body">

    <header>
        <div class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a href="#" class="navbar-brand">
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
                                Catalogo
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Contacto
                            </a>

                        </li>
                    </ul>
                    <a href="index.php" class="btn btn-primary">Carrito</a>
                    <a href="registro.php" class="btn btn-primary">Registrarse</a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <h3>Datos del cliente</h3>
            <form class="row g-3" action="registro.php" method="post" autocomplete="off">
                <div class="col-md-6">
                    <label for="nombres"><span class="text-danger">*</span> Nombres</label>
                    <input type="text" name="nombres" id="nombres" class="form-control" requireda>
                </div>
                <div class="col-md-6">
                    <label for="apellidos"><span class="text-danger">*</span> Apellidos</label>
                    <input type="text" name="apellidos" id="apellidos" class="form-control" requireda>
                </div>

                <div class="col-md-6">
                    <label for="email"><span class="text-danger">*</span> Correo electrónico</label>
                    <input type="email" name="email" id="email" class="form-control" requireda>
                    <span id="validaEmail" class="text-danger"></span>
                </div>
                <div class="col-md-6">
                    <label for="telefono"><span class="text-danger">*</span> Telefono</label>
                    <input type="tel" name="telefono" id="telefono" class="form-control" requireda>
                </div>

                <div class="col-md-6">
                    <label for="dni"><span class="text-danger">*</span> DNI</label>
                    <input type="text" name="dni" id="dni" class="form-control" requireda>
                </div>
                <div class="col-md-6">
                    <label for="usuario"><span class="text-danger">*</span> Usuario</label>
                    <input type="text" name="usuario" id="usuario" class="form-control" requireda>
                    <span id="validaUsuario" class="text-danger"></span>
                </div>

                <div class="col-md-6">
                    <label for="password"><span class="text-danger">*</span> Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control" requireda>
                </div>
                <div class="col-md-6">
                    <label for="repassword"><span class="text-danger">*</span> Repetir contraseña</label>
                    <input type="password" name="repassword" id="repassword" class="form-control" requireda>
                </div>

                <i><b>Nota:</b> Los campos con asterisco son obligatorios</i>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>

            </form>
           
            
        </div>
    </main>
    <footer class="footer mt-auto py-2 bg-dark">
        <div class="container">
            <p class="text-center">
                <span class="text-white">&copy; <?php echo date('Y'); ?> <a>Tienda Trupan</a></span>
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" 
    crossorigin="anonymous"></script>

</body>
</html>