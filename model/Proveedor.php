<?php
require_once "../config/Conexion.php";

class Proveedor
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	public function listar()
	{
		$sql="SELECT id_proveedor, nombre_proveedor, correo_electronico, estado_proveedor
        FROM proveedor";
		return ejecutarConsulta($sql);
	}

	//insertar los proveedores
	public function insertar($nombre, $correo)
	{
		
		$sql = "INSERT INTO proveedor(nombre_proveedor, correo_electronico) VALUES ('$nombre', '$correo')";
		return ejecutarConsulta($sql);
			
		/*$validacion=$this->comprueba_duplicados($nombre, $correo);
		if($validacion == 0){
			$sql = "INSERT INTO proveedor(nombre_proveedor, correo_electronico)
			VALUES ($nombre, $correo)";
			return ejecutarConsulta($sql);
		}
		else{
			return 0;
		}*/
	}

	public function editar($id_proveedor, $nombre, $correo)
	{
		if($validacion==0)
		{
			$sql = "UPDATE proveedor SET nombre_proveedor = '$nombre', correo_electronico = '$correo'
			WHERE id_proveedor = '$id_proveedor'";
			return ejecutarConsulta($sql);
		}
		else{
			return 0;
		}
	}

	public function mostrar($id_proveedor)
	{
		$sql = "SELECT id_proveedor, nombre_proveedor, correo_electronico
		FROM proveedor 
		WHERE id_proveedor = $id_proveedor)";
		return ejecutarConsultaSimpleFila($sql);
	}

	public function select()
	{
		$sql="SELECT id_proveedor, nombre_proveedor, correo_electronico
		FROM proveedor
		ORDER BY nombre_proveedor ASC";
		return ejecutarConsulta($sql);
	}

	public function activar($idproveedor)
	{
		$sql="UPDATE proveedor set estado_proveedor = FALSE where id_proveedor'$idproveedor'";
		return ejecutarConsulta($sql);
	}
}

?>