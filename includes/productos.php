<?php
$sql = $conexion->query("SELECT * FROM productos");  
?>
<section class="container-xl px-5" id="productos">
    <section class="row align-items-center">
        <section class="tabla col-xxl m-auto">
            <h1 class="text-center">Productos</h1>
            <table class="table table-striped col-xxl" id="productos-list">
                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($datos = $sql->fetch_object()) { ?>
                    <tr>
                        <td style="width:250px;">
                            <img style="width:100%;" src="<?= $datos->imagen ?>" alt="">
                        </td>
                        <td><?= $datos->nombre ?></td>
                        <td>$ <?= $datos->precio ?></td>
                        <td>
                            <a href="" class="btn btn-sm btn-primary">Ver mas</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>
        <?php require_once("contacto.php"); ?>
    </section>
    <br>
    <script>
        let table = new DataTable('#productos-list',{
            responsive:true
        });
    </script>
</section>
