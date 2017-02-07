<?php

$imagen = imagecreate(100,35);

$fondo = imagecolorallocate($image,117,230,156);
$texto = imagecolorallocate($image,255,255,255);
//valor aleatorio
//Rellenar
ImageFill($imagen,50,0);
imagestring($imagen, 5,25,5, $valoresAleatorios, $rojo);
for($i = 0;$i<=5;$i++){
    $x1 = rand(0,$ancho);
    $x2 = rand(0,$ancho);
    $y1 = rand(0,$alto);
    $y2 = rand(0,$alto);
    imageline($imagen, $x1, $y1, $x2, $y2, $rojo);
}
header("Content-type:image/jpeg");
imagejpeg($imagen);
imagedestroy($imagen);

?>
