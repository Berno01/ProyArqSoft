var tabla;

function init()
{
	$('#nombre_proveedor').validacion(' abcdefghijklmnñopqrstuvwxyzáéíóú0123456789/-*,.°()$#');
	$('#correo_electronico').validacion(' abcdefghijklmnñopqrstuvwxyzáéíóú,.@#º0123456789');
	$('#proveedor').select2();

	mostrarform(false);
	listar();
	limpiar();

	$("#formulario").on("submit", function(e){
		guardaryeditar(e);
	});
}

function guardaryeditar(e)
{
	e.preventDefault(); //No se activará la acción predeterminada del evento
	$("#btnGuardar").prop("disabled",true);
	var formData = new FormData($("#formulario")[0]);

	$.ajax({
		//1
		url: "../ajax/proveedor.php?op=1",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {   
			window.alert(datos);
			mensaje=datos.split(":");
			if(mensaje[0]=="1"){               
			swal.fire(
				'Mensaje de Confirmación',
				mensaje[1],
				'success'

				);           
	          mostrarform(false);
	          tabla.ajax.reload();
			}
			else{
				Swal.fire({
					type: 'error',
					title: 'Error',
					text: mensaje[1],
					footer: 'Verifique la información de Registro, en especial que la información no fué ingresada previamente a la Base de Datos. klk'
				});
			}
	    }

	});
	limpiar();

}

function mostrarform(flag)
{
	limpiar();
	if (flag)
	{
		$("#listadoregistros").hide();
		$("#formularioregistros").show();
		$("#btnGuardar").prop("disabled",false);
		$("#btnagregar").hide();
	}
	else
	{
		$("#listadoregistros").show();
		$("#formularioregistros").hide();
		$("#btnagregar").show();
	}
}

function cancelarform()
{
	limpiar();
	mostrarform(false);
}

function limpiar()
{
	$("#nombre_proveedor").val("");
	$("#correo_electronico").val("");
	$("#id_proveedor").val("");
}

function listar()
{
	tabla=$('#tblistado').DataTable({
		"lengthMenu": [ 10, 25, 50, 75, 100 ],//mostramos el menú de registros a revisar
		"Processing": true,//Activamos el procesamiento del datatables
        "ServerSide": true,//Paginación y filtrado realizados por el servidor
        "language": 
		{
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
        dom: 'Bfrtip',//Definimos los elementos del control de tabla
		buttons: [		          
			'copyHtml5',
			'excelHtml5',
			'csvHtml5',
			'pdf'
		],
		"ajax":
		{
			//0
			url: '../ajax/proveedor.php?op=0',
			type : "get",
			dataType : "json",						
			error: function(e){
				console.log(e.responseText);	
			}
		},
		"Destroy": true,
		"iDisplayLength": 10,//Paginación
		"order": [[ 0, "desc" ]]//Ordenar (columna,orden)
	});
}

function desactivar(id_proveedor)
{
	swal.fire({
		title: 'Mensaje de Confirmación',
		text: "¿Desea desactivar el Registro?",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		cancelButtonText: 'Cancelar',
		confirmButtonText: 'Desactivar'
	}).then((result)=>{
		if(result.value){
			//2
			$.post("../ajax/proveedor.php?op=2", {id_proveedor : id_proveedor}, function(e)
			{
				mensaje=e.split(":");
					if(mensaje[0]=="1"){  
						swal.fire
						('Mensaje de Confirmación',
						mensaje[1],
						'success'
					);  
					tabla.ajax.reload();
					}
					else
					{
						Swal.fire({
						type: 'error',
						title: 'Error',
						text: mensaje[1],
						footer: 'Verifique la información de Registro, en especial que la información no fué ingresada previamente a la Base de Datos. lk2'
						});
					}
			});
		}
	})
}

function activar(id_proveedor)
{
	swal.fire({
		title: 'Mensaje de Confirmación',
		text: "¿Desea activar el Registro?",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		cancelButtonText: 'Cancelar',
		confirmButtonText: 'Activar'
	}).then((result) => {
		if (result.value) {
			//3
			$.post("../ajax/proveedor.php?op=3", {id_proveedor : id_proveedor}, function(e){
				mensaje=e.split(":");
					if(mensaje[0]=="1"){  
						swal.fire(
							'Mensaje de Confirmación',
							mensaje[1],
							'success'
						);  
						tabla.ajax.reload();
					}	
					else{
						Swal.fire({
							type: 'error',
							title: 'Error',
							text: mensaje[1],
							footer: 'Verifique la información de Registro, en especial que la información no fué ingresada previamente a la Base de Datos. lklk3'
						});
					}			
        	});	
		}
	});
}

function mostrar(id_proveedor)
{
	$("#nombre_proveedor").val(data.nombre_proveedor);
	$("#id_proveedor").val(data.id_proveedor);
	$.post("../ajax/proveedor.php?op=4",{id_proveedor : id_proveedor}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarform(true);

		
		/*$.post("../ajax/categoria.php?op=5", function(r){
            $("#categoria").html(r);
            $('select[name=categoria]').val(data.id_categoria);
            $('#categoria').trigger('change.select2');
        });*/
 		
 	});

}

init();