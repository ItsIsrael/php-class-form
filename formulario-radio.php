<?php
//Recibimos la opción seleccionada
$radioOption = $_REQUEST['result']??false;
// Comprobamos cada caso
?>
<html lang="en">
<head>
    <link href="styles.css" rel="stylesheet"/>
</head>
<body>
<?php
switch ($radioOption){

	case 6:
?>
		<div class="container-result">
			<h1>&#x274C ¡Es incorrecto! &#x274C</h1>
			<a href='index.html'> <span class="arrow">&larr;</span> Volver al formulario.</a>
		</div>
<?php
		break;
	case 7:
		?>
		<div class="container-result"   >
			<h1 class="load">&#x1F389 ¡Es correcto! &#x1F389</h1>
			<a href='index.html'> <span class="arrow">&larr;</span> Volver al formulario.</a>
		</div>
		<?php
		break;
	case 9:
		?>
		<div class="container-result">
			<h1>&#x274C ¡Es incorrecto! &#x274C</h1>
			<a href='index.html'> <span class="arrow">&larr;</span> Volver al formulario.</a>
		</div>
		<?php
		break;
	case 12:
		?>
		<div class="container-result fail">
			<h1>&#x274C ¡Es incorrecto! &#x274C</h1>
			<a href='index.html'> <span class="arrow">&larr;</span> Volver al formulario.</a>
		</div>
		<?php
		break;
default:
		?>
	<div class="container-result">
		<h1>!Debes de seleccionar un valor!</h1>
		<a href='index.html'> <span class="arrow">&larr;</span> Volver al formulario.</a>
	</div>
<?php
}
?>
</body>
</html>
