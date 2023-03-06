<?php
require_once('../../modelo/db.php');
require_once('../../includes/admin/header.php');

$id = $_GET['id'];

$sql = $conexion->query("SELECT * FROM catalogo WHERE id=$id");
?>
<section class="container-fluid m-auto p-5">
    <form action="" method="POST">
        <fieldset class="text-center"><h3>Actualizar producto</h3></fieldset>
        <?php require_once("../../controlador/catalogo/editar.php"); ?>
        <?php while($datos = $sql->fetch_object()) { ?>
            <div class="form-group" style="visibility:hidden;">
                <label for="exampleInputEmail1">ID</label>
                <input type="text" class="form-control-plaintext" name="id" placeholder="ID imagen" value="<?= $datos->id ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Link de la imagen</label>
                <input type="text" class="form-control" name="imagen" placeholder="Link de la imagen" value="<?= $datos->imagen ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Descripcion</label>
                <textarea name="descripcion" cols="30" rows="4" class="form-control" placeholder="Descripción"><?= $datos->descripcion ?></textarea>
            </div>
            <input type="submit" class="btn btn-success btn-block" name="editar_imagen" value="Actualizar">
            <?php } ?>             
    </form>
</section>