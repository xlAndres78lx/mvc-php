<?php

function getUrl($modulo,$controlador,$funcion,$parametros=false){
	$url="index.php?modulo=$modulo&controlador=$controlador&funcion=$funcion";
	if($parametros!=false){
		foreach($parametros as $key=>$valor){
			$url.="&$key=$valor";
		}
	}
	return $url;
}

function redirect($url){
	echo "<script type='text/javascript'> window.location.href='$url'; </script> ";
}

function input($type,$name){
	echo "<input type='$type' name='$name' id='$name' />";
}
?>