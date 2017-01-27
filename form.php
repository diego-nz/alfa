<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP Cero</title>
<style>
	input{ display: block;}
</style>
</head>

<body>
	<?php
	echo "Hola soy PHP";
	?>
	<h1>Hola soy HTML</h1>
	<?php
	echo "<div>Soy un sal con div</div>";
	//varibales con minuscula
	
	//echo $nomvar;
	/*
	 * post
	 * get
	 * REQUEST
	 */
	if(isset($_REQUEST["txtnom"])){
		$nomvar=$_REQUEST["txtedad"];
			if ($nomvar>=18) {echo "Hola".$_REQUEST["txtnom"]. "Pues ir al Monkey";
			} 
			else {echo "Hola".$_REQUEST["txtnom"]. "estas chavo";
			}
		}else{
	?>
	<form name="frmedad" method="post" action="index.php">
		Nombre:
		<input type="text" name="txtnom" />
		Edad
		<input type="text" name="txtedad"/>
		<input type="submit" value="enviar" />
	</form>
	<?php }?>
	
</body>
</html>
	
	
