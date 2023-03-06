<?php 
$sql = $conexion->query("SELECT * FROM datos"); 
?>
<?php while($datos = $sql->fetch_object()) { ?>
<section class="container-xl py-3" id="info">
    <section class="row align-items-center">
        <section class="carrusel col-xxl m-auto">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" style="max-width:85vh;">
                  
                    <img style="width:100%;" src="<?= $datos->logo ?>" class="d-block w-100" alt="...">
                  
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                   <span class="sr-only">Previous</span>
                 </button>
                 <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                   <span class="carousel-control-next-icon" aria-hidden="true"></span>
                   <span class="sr-only">Next</span>
                 </button>
            </div>
        </section>
        <section class="info p-3 col-sm p-4">
            <h1 class="text-center">Quienes somos ?</h1>
            <hr>
            <br>
            <p style="text-align: justify;"><?= $datos->descripcion ?></p>
            <br>
            <a href="<?= $datos->formulario ?>" class="btn btn-success btn-block">Haz tu pedido</a>
        </section>
    </section>
    <hr>
</section>
<?php } ?>