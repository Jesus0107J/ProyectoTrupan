<?php 
    include '../headerCliente.php';
?>

    <div class="container-fluid">
        <div class="row" style="background-image: url('/../../fondologinCliente.jpg'); height: 950px;">
            <div class="col-md-3">
            </div>
            <div class="col-md-6" style="padding: 160px;">
                <div class="row">
                <main>
                    <div class="form-login m-auto pt-4">
                        <h1 class="text-center text-black" style="margin-bottom: 25px">Iniciar sesión</h1>
                        <form class="row g-3" action="ValidarCredencialesCliente.php" method="POST" autocomplete="off">
                            <input type="hidden" name="proceso" value="<?php echo $proceso; ?>">
                            
                            <h1 class="text-center text-dark" style="font-size:30px; background-color: red">
                                <?php
                                    if(isset($_GET["mensajeLogin"])){
                                        echo $_GET["mensajeLogin"];
                                    }
                                ?>
                            </h1>

                            <div class="form-floating">
                                <input name="cCorreoCliente" class="form-control" type="text"  placeholder="Ingrese su correo electrónico" required>
                                <label for="usuario">Correo Electrónico</label>
                            </div>

                            <div class="form-floating">
                                <input name="cContraseñaCliente" class="form-control" type="password" placeholder="Ingrese su contraseña" required>
                                <label for="password">Contraseña</label>
                            </div>
                            <hr>
                            <div class="d-grid gap-3 col-12">
                                <button type="submit" value="Ingresar" class="btn btn-success">Ingresar</button>
                            </div>
                        </form>
                        <div class="d-grid gap-3 col-12">
                            <button style="margin-top:10px" onclick="AbrirFormularioNuevo();" class="btn btn-warning">Registrarse</button>
                        </div> 
                    </div>
                </main>
            </div>
            <div class="col-md-3">
            </div>
        </div>
    </div>

<script>
    function AbrirModal(){
        $("#MiModal").modal("show");
    }
    function CerrarModal(){
        $("#MiModal").modal("hide");
    }

    function AbrirFormularioNuevo(){
        $.get("/admin/clientes/nuevoClienteJ.php",function(data){
            $("#MiModalHeaderT").html("Registrate para obtener descuentos exclusivos!");
            $("#MiModalBody").html(data);
            $("#MiModal").modal("show");
        });
    }


</script>
