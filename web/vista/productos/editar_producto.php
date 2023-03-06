<?php
require_once('../../modelo/db.php');
require_once('../../includes/admin/header.php');

$id = $_GET['id'];

$sql = $conexion->query("SELECT * FROM productos WHERE id=$id");
?>
<section class="container-fluid m-auto p-5">
    <form action="" method="POST">
        <fieldset class="text-center"><h3>Actualizar producto</h3></fieldset>
        <?php require_once("../../controlador/productos/editar.php"); ?>
        <?php while($datos = $sql->fetch_object()) { ?>
            <div class="form-group" style="visibility:hidden;">
                <label for="exampleInputEmail1">ID</label>
                <input type="text" class="form-control-plaintext" name="id" placeholder="ID del producto" value="<?= $datos->id ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Producto</label>
                <input type="text" class="form-control" name="nombre" placeholder="Nombre del producto" value="<?= $datos->nombre ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Imagen</label>
                <input type="text" class="form-control" name="imagen" placeholder="Link de la imagen" value="<?= $datos->imagen ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Precio $</label>
                <input type="number" class="form-control" name="precio" placeholder="Precio del producto" value="<?= $datos->precio ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Descripcion</label>
                <textarea name="descripcion" cols="30" rows="4" class="form-control" placeholder="Descripción"><?= $datos->descripcion ?></textarea>
            </div>
            <input type="submit" class="btn btn-success btn-block" name="editar_producto" value="Actualizar">
            <?php } ?>             
    </form>
</section>