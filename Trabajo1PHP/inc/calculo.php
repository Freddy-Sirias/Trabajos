<?php 

	$monto = $_POST['monto'];
	$moneda = $_POST['moneda'];
	$precio = 29;
	$resultado;

	if ($moneda = 1)
	{
		$resultado = $monto * $precio;
	}

	else
	{
		if ($moneda = 2) 
		{
			$resultado = $monto / $precio;
		}
	}

	echo "EL resultado es:", $resultado;



 ?>