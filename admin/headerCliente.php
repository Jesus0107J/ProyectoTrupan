<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda TRUPAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Delicious+Handrawn&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    
</head>
<body>
    <div id="MiModal" class="modal fade" rol="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 id="MiModalHeaderT">Soy la cabecera</h1>
                </div>
                <div class="modal-body" id="MiModalBody">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae iure facilis, itaque at accusantium sed mollitia voluptas cupiditate eaque possimus soluta alias aspernatur perferendis illo nulla ad quibusdam ratione ea.</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" onclick="CerrarModal();">Cerrar</button>
                </div>
            </div> 
        </div>
    </div>
    <header>
        <div class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a href="../../" class="navbar-brand">
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
                    
                </div>
            </div>
        </div>
    </header>