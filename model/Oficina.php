<?php
require_once "../config/Conexion.php";



Class Oficina
{

	//Implementamos nuestro constructor
	public function __construct()
	{

	}


	//Implementar un método para listar los registros
	public function listar()
	{
        $sql="SELECT a.id_oficina, a.nombre_oficina, a.direccion_oficina, a.estado_oficina, c.nombre_personal, c.apellidoP_personal, c.apellidoM_personal, c.correo_personal, c.ci_personal
		FROM oficina a, personal c
        WHERE(a.id_personal = c.id_personal);";
        return ejecutarConsulta($sql);	
	}

	//Implementamos un método para insertar registros
	public function insertar($nombre, $personal, $direccion_oficina)
	{
		$validacion=$this->comprueba_duplicados($nombre, $personal, $direccion_oficina);
		if($validacion==0){
			$sql="INSERT INTO oficina(nombre_oficina, id_personal, direccion_oficina)
            VALUES ('".$nombre."', '".$personal."','".$direccion_oficina."');";
			return ejecutarConsulta($sql);
		}
		else{
            return 0;}
	}

	//Implementamos un método para editar registros
	public function editar($idoficina,$nombre, $personal, $direccion_oficina)
	{
		$validacion=$this->comprueba_duplicados($nombre,$oficina);
		if($validacion==0){
			$sql="UPDATE oficina SET nombre_oficina='$nombre', direccion_oficina='$direccion_oficina, id_personal='$personal' 
			WHERE id_oficina='$idoficina'";
			return ejecutarConsulta($sql);
		}
		else{return 0;}
	}

    
	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($id_oficina)
	{
		$sql="SELECT a.id_oficina, a.nombre_oficina, a.direccion_oficina, a.estado_oficina, c.nombre_personal, c.apellidoP_personal, c.apellidoM_personal, c.correo_personal, c.ci_personal
		FROM oficina a, personal c
        WHERE(a.id_personal=c.id_personal) AND (id_oficina=".$id_oficina.")";
		return ejecutarConsultaSimpleFila($sql);
	}

	public function select()
	{
		$sql="SELECT id_oficina, nombre_oficina, direccion_oficina FROM oficina 
		ORDER BY nombre_oficina ASC";
		return ejecutarConsulta($sql);		
	}
	
	//Implementar un método para listar los registros
	public function comprueba_duplicados($nombre, $personal)
	{
		$resultado=0;
		$sql="SELECT COUNT(id_oficina) 
		AS id_oficina FROM oficina WHERE (id_personal= ".$personal.")and
		(nombre_oficina='".$nombre."')";
		$resultado = ejecutarConsultaSimpleFila($sql);
		return $resultado['id_oficina'];		
	}


	//Implementamos un método para desactivar personales
	public function desactivar($idoficina)
	{
		$sql="UPDATE oficina set estado_oficina = FALSE where id_oficina='$idoficina'";
		return ejecutarConsulta($sql);
		

	}

	//Implementamos un método para activar personales
	public function activar($idoficina)
	{
		$sql="UPDATE oficina set estado_oficina = TRUE where id_oficina='$idoficina'";
		return ejecutarConsulta($sql);
	}
	

}

?>