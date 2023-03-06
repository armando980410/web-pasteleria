<?php 
require_once("../../modelo/db.php");
$sql = $conexion->query("SELECT * FROM datos"); 
?>
<html>
    <?php require_once("../../includes/admin/header.php") ?>
    <body>
        <?php require_once("../../includes/admin/navbar.php") ?>
        <section class="container-fluid p-3">
            <section class="row">
                <section class="col-6">
                    <form action="" method="POST">
                        <?php require_once("../../controlador/datos/editar.php"); ?>
                        <?php require_once("../../controlador/datos/borrar.php"); ?>
                        <fieldset class="text-center"><h3>Datos de la empresa</h3></fieldset>
                        <?php while($datos = $sql->fetch_object()) { ?>
                            <div class="form-group" style="visibility:hidden;">
                                <label for="exampleInputEmail1">ID</label>
                                <input type="text" class="form-control" name="id" placeholder="ID de la empresa" value="<?= $datos->id ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre de la empresa</label>
                                <input type="text" class="form-control" name="nombre" placeholder="Introduce el nombre de la empresa" value="<?= $datos->nombre ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Logotipo</label>
                                <input type="text" class="form-control" name="logo" placeholder="Introduce el link del logotipo de la empresa" value="<?= $datos->logo ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Cel</label>
                                <input type="text" class="form-control" name="cel" placeholder="Introduce el telefono de la empresa" value="<?= $datos->cel ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Facebook</label>
                                <input type="text" class="form-control" name="fb" placeholder="Introduce el link de la pagina de facebook" value="<?= $datos->fb ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ubicacion</label>
                                <input type="text" class="form-control" name="ubicacion" placeholder="Introduce el link de Google Maps" value="<?= $datos->ubicacion ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Formulario de pedidos</label>
                                <input type="text" class="form-control" name="formulario" placeholder="Introduce el link del formulario" value="<?= $datos->formulario ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Slogan (Contacto)</label>
                                <textarea name="slogan" cols="30" rows="2" class="form-control" placeholder="Slogan de Contacto"><?= $datos->slogan ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Quienes somos ?</label>
                                <textarea name="descripcion" cols="30" rows="4" class="form-control" placeholder="Descripción"><?= $datos->descripcion ?></textarea>
                            </div>

                            <input type="submit" class="btn btn-warning btn-block" name="editar_datos" value="Editar">
                            <a href="datos.php?id=<?= $datos->id ?>" class="btn btn-danger btn-block">Borrar Datos</a>  
                        <?php } ?>                
                    </form>
                </section>
                <section class="col-6">
                    <form action="" method="POST">
                        <fieldset class="text-center"><h3>Formulario de registro</h3></fieldset>
                        <?php require_once("../../controlador/datos/guardar.php"); ?>
                        <div class="form-group" style="visibility:hidden;">
                            <label for="exampleInputEmail1">ID</label>
                            <input type="text" class="form-control" name="id" placeholder="ID de la empresa" value="<?= $datos->id ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombre de la empresa</label>
                            <input type="text" class="form-control" name="nombre" placeholder="Introduce el nombre de la empresa">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Logotipo</label>
                            <input type="text" class="form-control" name="logo" placeholder="Introduce el link del logotipo de la empresa">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Cel</label>
                            <input type="text" class="form-control" name="cel" placeholder="Introduce el telefono de la empresa">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Facebook</label>
                            <input type="text" class="form-control" name="fb" placeholder="Introduce el link de la pagina de facebook">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ubicacion</label>
                            <input type="text" class="form-control" name="ubicacion" placeholder="Introduce el link de Google Maps">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Formulario de pedidos</label>
                            <input type="text" class="form-control" name="formulario" placeholder="Introduce el link del formulario" value="<?= $datos->formulario ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Slogan (Contacto)</label>
                            <textarea name="slogan" cols="30" rows="2" class="form-control" placeholder="Slogan de Contacto"><?= $datos->slogan ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Quienes somos ?</label>
                            <textarea name="descripcion" cols="30" rows="4" class="form-control" placeholder="Descripción"></textarea>
                        </div>
                        <input type="submit" class="btn btn-success btn-block" name="guardar_datos" value="Guardar">
                    </form>
                </section>
            </section>
        </section>
    </body>
</html>