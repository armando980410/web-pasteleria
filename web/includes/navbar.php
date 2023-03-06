<?php 
$sql = $conexion->query("SELECT * FROM datos"); 
?>
<?php while($datos = $sql->fetch_object()) { ?>
<nav class="navbar navbar-expand-lg navbar-light p-3" style="background-color: #fdcae1;">
  
    <a class="navbar-brand" style="font-weight:bold;  font-size:1.5rem;" href="#"><?= $datos->nombre ?></a>
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <section class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#info">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#productos">Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#catalogo">Catalogo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contacto">Contacto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= $datos->formulario ?>">Haz tu pedido</a>
      </li>
    </ul>
  </section>
</nav>
<?php } ?>