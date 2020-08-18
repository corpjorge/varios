<?php

error_reporting(0);

$filepath = "C:/laragon/www/bloqueado2.rar";

$inicio = array(
	'oe',
	
);

$final = array(	
	'555'
);
 
foreach ($inicio as $ini ) {
 	
 	foreach ($final as $fin) {
 		$pass = $ini.'.'.$fin;	 

 		$rar_file = rar_open($filepath,$pass); 	
		$list = rar_list($rar_file);

		if ($list) {
			echo $pass;
		}  
		rar_close($rar_file);

 	} 	
} 
 

?>

