<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Contacto</title>
</head>

<body>
    <div class="centrado">
        <header>
            <?php include( "header.html");?>
        </header>
        <section>
            <fieldset>
                <legend>Formulario de contacto</legend>
                <?php 
                if (isset($_POST[ "txtNombre"])){
                //Mandar emial
                    $asunto= "Solicitud de información";
                    $mensaje ="Los datos del cliente  son" 
                        ."Nombre: ".$_POST["txtNombre"]
                        ."Telefono ".$_POST["txtTel"]
                        ."Correo ".$_POST["txtMail"]
                        ."Comentarios ".$_POST["txtObs"];
                    $destinatario="nunez.guzman@gmail.com";
                    $remitente="From ventas@diego.com.mx";
                    
                        //mail(destino,asunto,mensaje)
                    //mail($destinatario,$asunto,$mensaje,$remitente);
                echo "Gracias en breve un representante de ventas se pondrá en contacto";
                }else{
                ?>
                <form action="contacto.php" method="POST">
                    <label for="txtNombre">Nombre</label>
                    <input type="text" required name="txtNombre" id="txtNombre" class="caja">
                    <label for="txtTel">Telefono</label>
                    <input type="text" required name="txtTel" id="txtTel" class="caja">
                    <label for="txtMail">Mail</label>
                    <input type="email" required name="txtMail" id="txtMail" class="caja">
                    <label for="txtObs">Comentarios</label>
                    <textArea required name="txtObs" id="txtObs" class="caja"></textArea>
                    
                    <input type="submit" value="Enviar" class="btn">
                </form>
                <?php } ?>
            </fieldset>
        </section>
    </div>

</body>

</html>