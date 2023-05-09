<?php 
require_once "../model/Articulo.php";



$articulo=new Articulo();

$id_articulo=isset($_POST["id_articulo"])? $_POST["id_articulo"]:"";
$nombre_articulo=isset($_POST["nombre_articulo"])? mb_strtoupper($_POST["nombre_articulo"]):"";
$categoria=isset($_POST["categoria"])? $_POST["categoria"]:"";

switch ($_GET["op"]){
	case '0':
		$rspta=$articulo->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg = pg_fetch_assoc($rspta)){			
			$data[]=array(
				"0"=>('<button class="btn btn-warning" onclick="mostrar('.$reg['id_articulo'].')"><i class="bx bx-pencil"></i></button>'.
				'<button class="btn btn-info" onclick="reporte_detalle('.$reg['id_articulo'].')"><i class="fa fa-print"></i></button>'.
				'<button class="btn btn-primary" onclick="activar('.$reg['id_articulo'].')"><i class="bx bxs-check-square"></i></button>'),
				/*$reg['articulocondicion'])?'<button class="btn btn-warning" onclick="mostrar('.$reg['id_articulo'].')"><i class="bx bx-pencil"></i></button>'.
					'<button class="btn btn-info" onclick="reporte_detalle('.$reg['id_articulo'].')"><i class="fa fa-print"></i></button>'.
					'<button class="btn btn-danger" onclick="desactivar('.$reg['id_articulo'].')"><i class="bx bx-trash"></i></button>':
					'<button class="btn btn-warning" onclick="mostrar('.$reg['id_articulo'].')"><i class="bx bx-pencil"></i></button>'.
					'<button class="btn btn-info" onclick="reporte_detalle('.$reg['id_articulo'].')"><i class="fa fa-print"></i></button>'.
					'<button class="btn btn-primary" onclick="activar('.$reg['id_articulo'].')"><i class="bx bxs-check-square"></i></button>',*/
				"1"=>$reg['nombre_articulo'],
                "2"=>$reg['nombre_categoria'],
                "3"=>$reg['id_articulo']
				);
		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);

	break;
	case '1':
        /*if (!file_exists($_FILES['imagen']['tmp_name']) || !is_uploaded_file($_FILES['imagen']['tmp_name']))
		{
			$imagen=$_POST["imagenactual"];
		}
		else 
		{
			$ext = explode(".", $_FILES["imagen"]["name"]);
			if ($_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/png")
			{
				$imagen = round(microtime(true)) . '.' . end($ext);
				move_uploaded_file($_FILES["imagen"]["tmp_name"], "../file/articulos/" . $imagen);
			}
		}*/
		if (empty($id_articulo)){
			
			echo '<script language="javascript">alert('.$nombre_articulo.');</script>';
			$rspta=$articulo->insertar($nombre_articulo, $categoria);
			echo $rspta ? "1:El Artículo fué registrado" : "0:El Artículo no fué registrado";
		}
		else {
			$rspta=$articulo->editar($id_articulo,$nombre_articulo, $categoria);
			echo $rspta ? "1:El Artículo fué actualizado" : "0:El Artículo no fué actualizado";
		}
	break;

	/*
	case '2':
		$rspta=$articulo->desactivar($idarticulo);
 		echo $rspta ? "1:El Artículo fué Desactivado" : "0:El Artículo no fué Desactivado";
	break; 

	case '3':
		$rspta=$articulo->activar($idarticulo);
 		echo $rspta ? "1:El Artículo fué Activado" : "0:El Artículo no fué Activado";
	break; */

	case '4':
		$rspta=$articulo->mostrar($idarticulo);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case '5':
		$rspta = $articulo->select();
		while ($reg = pg_fetch_assoc($rspta))
		{
			echo '<option value=' . $reg['id_articulo'] . '>' . $reg['nombre_articulo'] . '</option>';
		}
	break;
	/*
	case '6':
		$rspta=$articulo->listarActivos();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg = pg_fetch_assoc($rspta))
		{
 			$data[]=array(
				"0"=>'<button class="btn btn-warning" onclick="agregarDetalle('.$reg['idarticulo'].',\''.$reg['articulonombre'].'\')"><span class="fa fa-plus"></span></button>',
 				"1"=>$reg['articulonombre'],
 				"2"=>$reg['categoria'],
 				"3"=>$reg['articulocodigo'],
 				"4"=>$reg['articulostock'],
 				"5"=>"<img src='../file/articulos/".$reg['articuloimagen']."' height='50px' width='50px' >"
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);
	break;
	
	case '7':
		$rspta=$articulo->listarActivosVenta();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg = pg_fetch_assoc($rspta))
		{
 			$data[]=array(
				"0"=>'<button class="btn btn-warning" onclick="agregarDetalle('.$reg['idarticulo'].',\''.$reg['articulonombre'].'\',\''.$reg['precio_venta'].'\',\''.$reg['articulostock'].'\')"><span class="fa fa-plus"></span></button>',
 				"1"=>$reg['articulonombre'],
 				"2"=>$reg['categoria'],
 				"3"=>$reg['articulocodigo'],
 				"4"=>$reg['articulostock'],
				"5"=>$reg['precio_venta'],
 				"6"=>"<img src='../file/articulos/".$reg['articuloimagen']."' height='50px' width='50px' >"
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);

	break; */
}
?>