<?php
  $A = $_REQUEST['valor1'];
  $B = $_REQUEST['valor2'];

if ($_REQUEST['operador']=="area") {
    $r_area = area($A,$B);
    echo "El area es: $r_area";
}


 function area($A,$B){
 	$area = ($A*$B);
 	return $area;
 }
 



?>