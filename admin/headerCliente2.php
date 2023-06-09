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
                    <a href="mostrarPedido.php" style="margin-right: 10px" class="btn btn-primary">Carrito</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(247, 247, 247, 0.96);transform: scaleX(-1);msFilter:progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1);"><path d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z"></path></svg>
                    <div class="dropdown">
                        <a style="color: white" name="cCorreoCliente">achamorro@gmail.com</a>
                        <div class="dropdown-content">
                            <a href="admin/clientes/mostrarCliente.php">Perfil</a>
                            <a href="../../index.php">Cerrar Sesión</a>
                        </div>
                    </div>
                    <a style="margin-left: 10px" href="/admin/login/">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAMxJREFUSEvdVcERwjAMkyZgBGCTskmZjI7CCLBBuwFMIM659K4EjjiluSv4G1myYicmKgcr82MdApIaACcAO4fjHsCR5NmwLgeSLGnrIB8hPcl9iYACmMwWJOkJm00w4jTpk5PfEJDUkWzfOZnlICWKJBcAB5K36fmSAsZr5CZiYiGyAiOgYCQNanPfrUPAU/nE5R1AU3RFBQLXSP59k9PGLT6m//eSa/xF1siNZwAiZiAZdof3N7WFYw/JsxMGAG3Rwimo/AXqcrBqgQfSpJgZ4nkKpAAAAABJRU5ErkJggg=="/>
                    </a>
                </div>
            </div>
        </div>
    </header>