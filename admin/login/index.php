
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
    <div class="container-fluid">
        <div class="row" style="background-image: url('/../../fondologin.jpg'); height: 800px;">
            <div class="col-md-3">
            </div>
            <div class="col-md-6" style="padding: 160px;">
                <div class="row">
                <main>
                    <div class="form-login m-auto pt-4">
                        <h2 class="text-center" style="margin-bottom: 30px">Iniciar sesión - Administrador</h2>
                        <form class="row g-3" action="ValidarCredenciales.php" method="POST" autocomplete="off">
                            <input type="hidden" name="proceso" value="<?php echo $proceso; ?>">
                            
                            <h1 class="text-center text-danger" style="font-size:30px;">
                                <?php
                                    if(isset($_GET["mensajeLogin"])){
                                        echo $_GET["mensajeLogin"];
                                    }
                                ?>
                            </h1>

                            <div class="form-floating">
                                <input name="cNombreUsuario" class="form-control" type="text"  placeholder="Ingrese su nombre de usuario" required>
                                <label for="usuario">Usuario</label>
                            </div>

                            <div class="form-floating">
                                <input name="cContraseñaUsuario" class="form-control" type="password" placeholder="Ingrese su usuario" required>
                                <label for="password">Contraseña</label>
                            </div>
                            <hr>
                            <div class="d-grid gap-3 col-12">
                                <button type="submit" class="btn btn-warning">Ingresar</button>
                            </div>
                        </form> 
                    </div>
                </main>
            </div>
            <div class="col-md-3">
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" 
    crossorigin="anonymous"></script>

</body>
</html>