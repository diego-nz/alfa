<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Plantilla Comercio</title>
    <link href="css/style.css" rel="stylesheet" />
    <meta name="viewport" content="width-device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>

<body>
    <div class="centrado">
        <?php include( "header.html"); ?>
        <section>
            <div>
                <img src="catalogo/jquery.jpg" alt="" />
            </div>
            <div class="columcat">
                Categorias
            </div>
            <div class="columpro">
                <?php for($i=1;$i<=15;$i++){ ?>
                <div class="productos">
                    Producto
                    <br />
                    <?php
                        $producto=rand(1,15);
                    ?>
                    <a href="producto.php?varProduct=<?php echo $producto; ?>" ><img src="catalogo/<?php echo $producto;?>.jpg" alt="" class="imgpro" /></a>
                </div>
                <?php } ?>
            </div>
        </section>
        <footer>

        </footer>
    </div>
</body>

</html>