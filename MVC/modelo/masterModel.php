<?php
include_once 'lib/config/conexion.php';

class masterModel extends conexion{

	function insert($sql){
		$respuesta=mysqli_query($this->getConexion(),$sql);
		return $respuesta;
	}
	
	function update($sql){
		$respuesta=mysqli_query($this->getConexion(),$sql);
		return $respuesta;
	}
	
	function delete($sql){
		$respuesta=mysqli_query($this->getConexion(),$sql);
		return $respuesta;
	}
	
	function selectObjeto($sql){
		$respuesta=mysqli_query($this->getConexion(),$sql);
		return $respuesta;
	}
	
	function selectArray($sql){
		$respuesta=mysqli_query($this->getConexion(),$sql);
		$return= array();
		if($respuesta){
			while($row=mysqli_fetch_array($respuesta)){
				$return[]=$row;
			}
			return $return;
		}
	}
}

?>