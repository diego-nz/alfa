<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Productos</title>
</head>

<body>
    <div class="centrado">
        <header>
            <?php include( "header.html"); ?>
        </header>
        <div class="product">
            
            <div class="productImage">
                <img src="catalogo/<?php echo $_GET['varProduct'];?>.jpg" alt="">
            </div>
            <div class="price">
                <ul>
                    <li>Nombre de este producto</li>
                    <li>$10,000.00</li>
                </ul>
                <a href="contacto.php" class="btn">Comprar</a>
            </div>
            <div class="description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum quo, quos obcaecati blanditiis iste explicabo odio consequuntur esse sint. Blanditiis sapiente eum voluptatibus perferendis, delectus architecto commodi ab assumenda magni!
            </div>
        </div>


    </div>

</body>

</html>