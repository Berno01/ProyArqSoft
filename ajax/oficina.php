<?php 
require_once "../model/Oficina.php";

$oficina=new Oficina();

$id_oficina=isset($_POST["id_oficina"])? $_POST["id_oficina"]:"";
$nombre_oficina=isset($_POST["nombre_oficina"])? mb_strtoupper($_POST["nombre_oficina"]):"";
$direccion_oficina=isset($_POST["direccion_oficina"])? mb_strtoupper($_POST["direccion_oficina"]):"";
$personal=isset($_POST["personal"])? $_POST["personal"]:"";

switch ($_GET["op"]){
	case '0':
		$rspta=$oficina->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg = pg_fetch_assoc($rspta)){			
			$data[]=array(
				"0"=>($reg['estado_oficina']=='t')?'<button class="btn btn-warning" onclick="mostrar('.$reg['id_oficina'].')"><i class="mdi mdi-border-color"></i></button>'.
					'<button class="btn btn-danger" onclick="desactivar('.$reg['id_oficina'].')"><i class="mdi mdi-cup-off"></i></button>':
					'<button class="btn btn-warning" onclick="mostrar('.$reg['id_oficina'].')"><i class="mdi mdi-border-color"></i></button>'.
					'<button class="btn btn-primary" onclick="activar('.$reg['id_oficina'].')"><i class="mdi mdi-cup"></i></button>', //bx bxs-check-square
				"1"=>$reg['nombre_oficina'],
                "2"=>$reg['nombre_personal'],
                "3"=>$reg['apellidoP_personal'],
                "4"=>$reg['apellidoM_personal'],
                "5"=>$reg['correo_personal'],
                "6"=>$reg['id_oficina'] 
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
		if (empty($id_oficina)){
			
			$rspta=$oficina->insertar($nombre_oficina, $personal, $direccion_oficina);
			echo $rspta ? "1:El Artículo fué registrado" : "0:El Artículo no fué registrado";
		}
		else {
			$rspta=$oficina->editar($id_oficina,$nombre_oficina, $personal, $direccion_oficina);
			echo $rspta ? "1:El Artículo fué actualizado" : "0:El Artículo no fué actualizado";
		}
	break;

	
	case '2':
		$rspta=$oficina->desactivar($id_oficina);
 		echo $rspta ? "1:El Artículo fué Desactivado" : "0:El Artículo no fué Desactivado";
	break; 

	case '3':
		$rspta=$oficina->activar($id_oficina);
 		echo $rspta ? "1:El Artículo fué Activado" : "0:El Artículo no fué Activado";
	break; 

	case '4':
		$rspta=$oficina->mostrar($id_oficina);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;
    case '5':
		$rspta = $oficina->select();
		while ($reg = pg_fetch_assoc($rspta))
		{
			echo '<option value=' . $reg['id_oficina'] . '>' . $reg['nombre_oficina'] . '</option>';
		}
	break;
}
?>