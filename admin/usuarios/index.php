<?php 
    include '../headerA.php';
?>

<?php
    include '../configDB.php';
    $datos="";
    $query = "CALL MostrarUsuarios();";
    $sentencia = $conn->prepare($query);
    $sentencia->execute();
    $result = $sentencia->get_result();

    while ($resultA = $result->fetch_assoc()) {
        $datos = $datos . "<tr>
                                <td>
                                    ". $resultA["idusuario"] ."
                                </td>
                                <td>
                                    ". $resultA["cNombreUsuario"] ."
                                </td>
                                <td>
                                    ". $resultA["cNombres"] ."
                                </td>
                                <td>
                                    ". $resultA["cApellidos"] ."
                                </td>
                                <td>
                                    <button class='btn btn-success' onclick = AbrirFormularioEditar(". $resultA["idusuario"] .");>Actualizar</button>
                                    <button class='btn btn-danger' onclick = EliminarUsuario(". $resultA["idusuario"] .");>Eliminar</button>
                                </td>
                            </tr>";
    };
?>

<div class="row">
    <div class="col-md-12">
        <h1 class="text-center bg-secondary text-white">Mantenimiento de usuarios</h1>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
        <div class="row">
            <button onclick="AbrirFormularioNuevo();" class="btn btn-primary">Nuevo</button>
        </div>   
    </div>
    <div class="col-md-3">  
    </div>  
</div>

<table class="table">
    <thead>
        <tr>
            <th>Código</th>
            <th>Nombre de usuario</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>
                Acciones
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
            echo $datos;
        ?>
    </tbody>
</table>

<script>
    function AbrirModal(){
        $("#MiModal").modal("show");
    }
    function CerrarModal(){
        $("#MiModal").modal("hide");
    }

    function AbrirFormularioNuevo(){
        $.get("/admin/usuarios/nuevoJ.php",function(data){
            $("#MiModalHeaderT").html("Registro de nuevos usuarios del sistema");
            $("#MiModalBody").html(data);
            $("#MiModal").modal("show");
        });
    }

    function AbrirFormularioEditar(idusuario){
        $.get("/admin/usuarios/actualizarJ.php?idusuario="+idusuario,function(data){
            $("#MiModalHeaderT").html("Actualizar usuario del sistema");
            $("#MiModalBody").html(data);
            $("#MiModal").modal("show");
        });
    }

    function EliminarUsuario(idusuario){
        Swal.fire({
        title: 'Eliminar Usuario',
        text: "¿Esta seguro de realizar la eliminación?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Confirmar!'
        }).then((result) => {
        if (result.isConfirmed) {
            $.get("/admin/usuarios/eliminarJ.php?idusuario="+idusuario,function(data){
                Swal.fire(
                    'Proceso correcto',
                    data,
                    'success'
                    ); 
                    setTimeout(() => {
                        window.location.reload();
                    }, 2000);
            });
        }
        }); 
    }
    

</script>

<?php
    include '../footerA.php';
?> 
 