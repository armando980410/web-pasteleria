<?php
require_once("../../modelo/db.php");
$sql = $conexion->query("SELECT * FROM productos");  
?>
<html>
    <?php require_once("../../includes/admin/header.php") ?>
    <body>
        <?php require_once("../../includes/admin/navbar.php") ?>
        <main>
        <section class="container-xxl p-3">
            <section class="row">
                <section class="col-md-4 px-5">
                    <form action="" method="POST">
                        <?php require_once("../../controlador/productos/borrar.php"); ?>
                        <fieldset class="text-center"><h3>Registrar producto</h3></fieldset>
                        <?php require_once("../../controlador/productos/guardar.php"); ?>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Producto</label>
                                <input type="text" class="form-control" name="nombre" placeholder="Nombre del producto">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Imagen</label>
                                <input type="text" class="form-control" name="imagen" placeholder="Link de la imagen">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Precio $</label>
                                <input type="number" class="form-control" name="precio" placeholder="Precio del producto">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Descripcion</label>
                                <textarea name="descripcion" cols="30" rows="4" class="form-control" placeholder="Descripción"></textarea>
                            </div>

                            <input type="submit" class="btn btn-success btn-block" name="guardar_productos" value="Guardar">                
                    </form>
                </section>
                <section calss="col-xxl">
                    <h3 class="text-center">Listado de productos</h3>
                    <?php require_once("../../controlador/productos/borrar.php") ?>
                    <table class="table table-striped" id="productos-list">
                        <thead>
                            <th>ID</th>
                            <th>Imagen</th>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Descripción</th>
                            <th></th>
                        </thead>
                        <tbody>
                        <?php while($datos = $sql->fetch_object()) { ?>
                            <tr>
                                <td><?= $datos->id ?></td>
                                <td style="width:150px;">
                                    <img style="width:100%;" src="<?= $datos->imagen ?>" alt="">
                                </td>
                                <td><?= $datos->nombre ?></td>
                                <td>$ <?= $datos->precio ?></td>
                                <td><?= $datos->descripcion ?></td>
                                <td class="px-5">
                                    <a href="/web/vista/productos/editar_producto.php?id=<?= $datos->id ?>" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="productos.php?id=<?= $datos->id ?>" class="btn btn-sm btn-danger" href=""><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </section>
            </section>
        </main>
    </body>
    <script>
        let table = new DataTable('#productos-list',{
            responsive:true
        });
    </script>
</html>