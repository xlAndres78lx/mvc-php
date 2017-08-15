<?php
class conexion {
	private $host;
	private $user;
	private $pass;
	private $data;
	private $conx;

	function __construct(){
		$this->setConexion();
		$this->conectar();
	}

	function setConexion(){
		require('config.php');
		$this->host = $MySQL['host'];
		$this->user = $MySQL['user'];
		$this->pass = $MySQL['pass'];
		$this->data = $MySQL['data'];
	}

	function conectar(){
		$this->conx = mysqli_connect($this->host,$this->user,$this->pass,$this->data);
	}

	function getConexion(){
		return $this->conx;
	}

	function closeConexion(){
		mysqli_close($this->conx);
	}
}
?>