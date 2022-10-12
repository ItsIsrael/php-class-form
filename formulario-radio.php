<?php
//Recibimos la opción seleccionada
$radioOption = $_REQUEST['result']??false;
const SUCCESS = "
<h1>&#x1F389 ¡Es correcto! &#x1F389</h1>
<a href='index.html'>Volver al formulario.</a>
";

const FAILED = "
<h1>&#x274C ¡Es incorrecto! &#x274C</h1>
<a href='index.html'>Volver al formulario.</a>
";

const DEFECT = "
<h1>!Debes de seleccionar un valor!</h1>
<a href='index.html'>Volver al formulario.</a>
";

// Comprobamos
switch ($radioOption){
	case 6:
		echo FAILED;
		break;
	case 7:
		print SUCCESS;
		break;
	case 9:
		print FAILED;
		break;
	case 12:
		print(FAILED);
		break;
	default:
		print DEFECT;
}