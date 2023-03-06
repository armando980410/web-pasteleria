<?php include("modelo/db.php"); ?>
<html>
    <style>
        @media (min-width:810px){
            main{
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                grid-gap: 10px;
                grid-auto-rows: minmax(100px, auto);
            }
            .carrusel{
                grid-column: 2 / 3;
                
            }
        }
    </style>
    <?php include("includes/header.php"); ?>
    <body>
        <?php include("includes/navbar.php"); ?>
        <main>
            <?php include("includes/info.php"); ?>
            <?php include("includes/productos.php"); ?>
            <?php include("includes/catalogo.php"); ?>
        </main>
        <?php include("includes/footer.php"); ?>
    </body>
</html>