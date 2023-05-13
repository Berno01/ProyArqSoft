<?php

require_once "../model/Proveedor.php";

$proveedor = new Proveedor();

$id_proveedor = isset($_POST["id_proveedor"])? $_POST["id_proveedor"]:"";
$nombre_proveedor = isset($_POST["nombre_proveedor"])? $_POST["nombre_proveedor"]:"";
$correo_electronico = isset($_POST["correo_electronico"])? $_POST["correo_electronico"]:"";

switch ($_GET["op"])
{
    case '0':
        $rspta=$proveedor->listar();
		//Vamos a declarar un array
		$data= Array();

        while ($reg = pg_fetch_assoc($rspta)){			
			$data[]=array(
				"0"=>($reg['estado_proveedor']=='t')?'<button class="btn btn-warning" onclick="mostrar('.$reg['id_proveedor'].')"><i class="mdi mdi-border-color"></i></button>'.
					' <button class="btn btn-danger" onclick="desactivar('.$reg['id_proveedor'].')"><i class="mdi mdi-cup-off"></i></button>':
					' <button class="btn btn-warning" onclick="mostrar('.$reg['id_proveedor'].')"><i class="mdi mdi-border-color"></i></button>'.
					' <button class="btn btn-primary" onclick="activar('.$reg['id_proveedor'].')"><i class="mdi mdi-cup"></i></button>',
				
				"1"=>$reg['nombre_proveedor'],
                "2"=>$reg['correo_electronico'],
                "3"=>$reg['id_proveedor']
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
        if(empty($id_proveedor))
        {
           
            $rspta = $proveedor->insertar($nombre_proveedor, $correo_electronico);
            echo $rspta ? "1:Proveedor registrado" : "0:No se pudieron registrar todos los datos del proveedor";
			
        }
        else
        {
            $rspta = $proveedor->editar($id_proveedor, $nombre_proveedor, $correo_electronico);
            echo $rspta ? "1:Proveedor actualizado":"0:proveedor no se pudo actualizar";
        }
    break;

    case '2':
		$rspta=$proveedor->desactivar($id_proveedor);
 		echo $rspta ? "1:Proveedor Desactivado" : "0:proveedor no se puede desactivar";
	break;

    case '3':
		$rspta=$proveedor->activar($id_proveedor);
 		echo $rspta ? "1:Proveedor activado" : "0:proveedor no se puede activar";
	break;
    
    case '4':
		$rspta=$proveedor->mostrar($id_proveedor);
 		echo json_encode($rspta);
	break;

	/*
    case '5':
		$rspta = $proveedor->select();
		while ($reg = pg_fetch_assoc($rspta))
		{
			echo '<option value=' . $reg['id_proveedor'] . '>' . $reg['nombre_proveedor']. " " . $reg['correo_electronico']. " " . '</option>';
		}
	break;	
*/

}

?>