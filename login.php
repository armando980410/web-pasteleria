<?php
require_once('includes/admin/header.php');
require_once('modelo/db.php');
?>

<body class="bg-dark">
    <section class="contenedor col-sm-6 m-auto p-5">
        <section class="card">
            <section class="crad-title p-3">
                <h2 class="text-center">Iniciar sesión</h2>
            </section>
            <section class="card-body">
                <form action="" method="POST">
                    <?php include('controlador/login/logear.php'); ?>
                    <section class="form-group">
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre de Usurio" autofocus>
                    </section>
                    <section class="form-group">
                            <input type="password" name="contraseña" class="form-control" placeholder="Contraseña">
                    </section>
                    <input type="submit" value="Entrar" name="btnlogin" class="btn btn-primary btn-block btn-lg">
                </form>
            </section>
        </section>
    </section>
</body>