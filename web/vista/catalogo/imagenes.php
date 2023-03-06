<?php
require_once("../../modelo/db.php");
$sql = $conexion->query("SELECT * FROM catalogo");  
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
                        <?php require_once("../../controlador/catalogo/borrar.php"); ?>
                        <fieldset class="text-center"><h3>Insertar Imagen</h3></fieldset>
                        <?php require_once("../../controlador/catalogo/guardar.php"); ?>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Imagen</label>
                                <input type="text" class="form-control" name="imagen" placeholder="Link de la imagen">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Descripcion</label>
                                <textarea name="descripcion" cols="30" rows="4" class="form-control" placeholder="Descripción"></textarea>
                            </div>

                            <input type="submit" class="btn btn-success btn-block" name="guardar_imagen" value="Guardar">                
                    </form>
                </section>
                <section calss="col-xxl">
                    <h3 class="text-center">Listado de imagenes</h3>
                    <?php require_once("../../controlador/catalogo/borrar.php") ?>
                    <table class="table table-striped" id="productos-list">
                        <thead>
                            <th>ID</th>
                            <th>Imagen</th>
                            <th>Descripcion</th>
                            <th></th>
                        </thead>
                        <tbody>
                        <?php while($datos = $sql->fetch_object()) { ?>
                            <tr>
                                <td><?= $datos->id ?></td>
                                <td style="width:150px;">
                                    <img style="width:100%;" src="<?= $datos->imagen ?>" alt="">
                                </td>
                                <td><?= $datos->descripcion ?></td>
                                <td class="px-5">
                                    <a href="/web/vista/catalogo/editar_imagen.php?id=<?= $datos->id ?>" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="imagenes.php?id=<?= $datos->id ?>" class="btn btn-sm btn-danger" href=""><i class="fa-solid fa-trash"></i></a>
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