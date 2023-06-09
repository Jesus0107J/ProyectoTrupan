<?php 
    include '../headerCliente2.php';
?>

<?php
    include '../configDB.php';
    $datos="";
    $query = "CALL MostrarPedidos();";
    $sentencia = $conn->prepare($query);
    $sentencia->execute();
    $result = $sentencia->get_result();

    while ($resultA = $result->fetch_assoc()) {
        $datos = $datos . "<tr>
                                <td>
                                    ". $resultA["idservicio"] ."
                                </td>
                                <td>
                                    ". $resultA["cNombreServicio"] ."
                                </td>
                                <td>
                                    ". $resultA["cDescripcion"] ."
                                </td>
                                <td>
                                    ". $resultA["nPrecioServicio"] ."
                                </td>
                                <td>
                                    <button class='btn btn-danger' onclick = EliminarPedido(". $resultA["idservicio"] .");>Quitar</button>
                                </td>
                            </tr>";
    };
?>

<div class="row">
    <div class="col-md-12">
        <h1 class="text-center bg-secondary text-white">Resumen de pedido</h1>
    </div>
</div>


<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre del servicio</th>
            <th>Descripción</th>
            <th>Precio del servicio</th>
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

<div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
        <div class="row">
            <a style="margin-bottom: 50px" href="/" class="btn btn-primary">Continuar</a>
        </div>
    </div>
    <div class="col-md-4">  
    </div>  
</div>

<script>
    function EliminarPedido(idservicio){
            Swal.fire({
            title: '¿Desea quitar el producto?',
            text: "Quitar producto del pedido",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Quitar!'
            }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                'Eliminado!',
                'El registro fue eliminado.',
                'success'
                );
                window.location.href = "/admin/pedidos/eliminarPedido.php?idservicio=" + idservicio;
            }
            })
        }
</script>

<?php
    include '../footerA.php';
?>    
