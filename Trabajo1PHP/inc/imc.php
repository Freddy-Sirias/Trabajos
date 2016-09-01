<?php 

	$peso = $_POST['peso'];
	$altura = $_POST['altura'];
	$cantidad = $altura * $altura;

	$imc = $peso / $cantidad;

	echo "EL imc es de: ", $imc;


 ?>