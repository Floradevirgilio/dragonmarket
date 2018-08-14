<?php
//precio1 es cantidad
//precio2 es 

$precioDolar = rand(20,25);

function conversor($precio,$tipodeoperacion,$precioDolar){
	if($tipodeoperacion == "pad"){
		return $precio / $precioDolar;
	}else {
		return $precio * $precioDolar;
	}
}

echo conversor($_GET['cantidad'],$_GET['tipodeoperacion'],$precioDolar);





?>