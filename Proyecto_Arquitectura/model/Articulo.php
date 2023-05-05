<?php
require_once "../config/Conexion.php";



Class Articulo implements Prototype
{

	//Implementamos nuestro constructor
	public function __construct()
	{

	}


	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT a.id_articulo, a.nombre_articulo, c.categoria_nombre
        FROM articulo a, categoria c
        WHERE(a.id_categoria=c.id_categoria);";
		return ejecutarConsulta($sql);		
	}

	//Implementamos un método para insertar registros
	public function insertar($nombre, $categoria)
	{
		//$validacion=$this->comprueba_duplicados($codigo,0);
		if($validacion==0){
			$sql="INSERT INTO articulo(nombre_articulo, id_categoria)
            VALUES ('$nombre', '$categoria');";
			return ejecutarConsulta($sql);
		}
		else{return 0;}
	}

	//Implementamos un método para editar registros
	public function editar($idarticulo,$nombre, $categoria)
	{
		//$validacion=$this->comprueba_duplicados($codigo,$idarticulo);
		if($validacion==0){
			$sql="UPDATE articulo SET nombre_articulo='$nombre', id_categoria='$categoria' 
			WHERE id_articulo='$idarticulo'";
			return ejecutarConsulta($sql);
		}
		else{return 0;}
	}

    
	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($idarticulo)
	{
		$sql="SELECT a.id_articulo, a.articulo_nombre, c.id_categoria
        FROM articulo a, categoria c
        WHERE(a.id_categoria=c.id_categoria) AND (id_articulo='$idarticulo')";
		return ejecutarConsultaSimpleFila($sql);
	}

	public function select()
	{
		$sql="SELECT id_articulo, nombre_articulo FROM articulo 
		ORDER BY nombre_articulo ASC";
		return ejecutarConsulta($sql);		
	}
	/*
	//Implementar un método para listar los registros
	public function comprueba_duplicados($codigo,$id)
	{
		$resultado=0;
		$sql="SELECT COUNT(idarticulo) AS idarticulo FROM articulo WHERE (articulocodigo='$codigo') AND (idarticulo<>$id)";
		$resultado = ejecutarConsultaSimpleFila($sql);
		return $resultado['idarticulo'];		
	}

	//Implementar un método para listar los registros activos
	public function listarActivos()
	{
		$sql="SELECT a.idarticulo, a.idcategoria, c.categorianombre as categoria, a.articulocodigo, a.articulonombre, a.articulostock, a.articulodescripcion, a.articuloimagen, a.articulocondicion FROM articulo a INNER JOIN categoria c ON a.idcategoria=c.idcategoria WHERE a.articulocondicion='1'";
		return ejecutarConsulta($sql);		
	}

    */
	

	

}

?>