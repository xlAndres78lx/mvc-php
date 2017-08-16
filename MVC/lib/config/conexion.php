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
		$this->host = 'localhost';
		$this->user = 'root';
		$this->pass = '';
		$this->data = 'siga';
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