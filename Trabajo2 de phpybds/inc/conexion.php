<?php
	$mysqli=new mysqli("localhost","freddy","","phpmysql");
	
	mysqli_set_charset($mysqli, "utf8");//Ubica las tildes a los registros
?>