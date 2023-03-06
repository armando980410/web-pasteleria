<?php
session_start();

if (empty($_SESSION["id"])){
    header ("location: /web/login.php");
}
?>
<nav class="navbar navbar-expand-lg navbar-dark p-3 bg-dark">
  <a class="navbar-brand" style="font-weight:bold;  font-size:1.5rem;" href="#"><?= $datos->nombre ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <section class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/web/vista/admin.php">Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/web/vista/datos/datos.php">Datos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/web/vista/productos/productos.php">Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/web/vista/catalogo/imagenes.php">Catalogo</a>
      </li>
    </ul>
    <a href="../../controlador/login/logout.php" class="btn btn-danger">Salir</a>
  </section>
</nav>
