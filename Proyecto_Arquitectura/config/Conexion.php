<?php

require_once "global.php";
$conexion = new ConexionPostgreSQL(DB_HOST, DB_PORT, DB_NAME, DB_USERNAME, DB_PASSWORD);

if (!$conexion->conectar())
{
	printf("Error: No se pudo abrir la base de datos\n");
	exit();
}

if (!function_exists('ejecutarConsulta'))
{
	function ejecutarConsulta($sql)
	{
		global $conexion;
		$query = $conexion->ejecutarConsulta($sql);
		return $query;
	}

	function ejecutarConsultaSimpleFila($sql)
	{
		global $conexion;
		$row = $conexion->ejecutarConsultaSimpleFila($sql);
		return $row;
	}

	function ejecutarConsulta_retornarID($sql)
	{
		global $conexion;
		$new_id = $conexion->ejecutarConsultaRetornarID($sql);
		return $new_id;
	}
	
	function cerrar_conexion()
	{
		global $conexion;
		$conexion->cerrarConexion();
		return true;
	}
}

class ConexionPostgreSQLAdapter
{
	private $conexion;
	
	public function __construct($host, $port, $dbname, $user, $password)
	{
		$this->conexion = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");
	}
	
	public function conectar()
	{
		return $this->conexion;
	}
	
	public function cerrarConexion()
	{
		pg_close($this->conexion);
	}
	
	public function ejecutarConsulta($sql)
	{
		$query = pg_query($this->conexion, $sql);
		return $query;
	}
	
	public function ejecutarConsultaSimpleFila($sql)
	{
		$query = pg_query($this->conexion, $sql);
		$row = pg_fetch_assoc($query);
		return $row;
	}
	
	public function ejecutarConsultaRetornarID($sql)
	{
		$query = pg_query($this->conexion, $sql);
		$row = pg_fetch_array($query);
		$new_id = $row['0'];
		return $new_id;
	}
}

class ConexionPostgreSQL
{
	private $adapter;
	
	public function __construct($host, $port, $dbname, $user, $password)
	{
		$this->adapter = new ConexionPostgreSQLAdapter($host, $port, $dbname, $user, $password);
	}
	
	public function conectar()
	{
		return $this->adapter->conectar();
	}
	
	public function cerrarConexion()
	{
		return $this->adapter->cerrarConexion();
	}
	
	public function ejecutarConsulta($sql)
	{
		return $this->adapter->ejecutarConsulta($sql);
	}
	
	public function ejecutarConsultaSimpleFila($sql)
	{
		return $this->adapter->ejecutarConsultaSimpleFila($sql);
	}
	
	public function ejecutarConsultaRetornarID($sql)
	{
		return $this->adapter->ejecutarConsultaRetornarID($sql);
	}
}

?>