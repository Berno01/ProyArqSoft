<?php

require 'header.php';

?>
<!-- contenido HTML -->
<div class="main-content" id="miniaresult">
    <div class="page-content">
        <div class="container-fluid">
            <!-- titulo de inicio -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Proveedores &nbsp; 
                            <!-- FUNCIONES PARA JS -->
                            <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="bx bx-add-to-queue"></i> Nuevo</button>
                        </h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Escritorio</a></li>
                                <li class="breadcrumb-item active">Proveedores</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- titulo terminado -->
            
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- FUNCIONES PARA JS -->
                        <div class="card-body" id="listadoregistros">
                            <h4 class="card-title">Listado de Registros</h4>
                            <table id="tblistado" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Opciones</th> 
                                        <th>Nombre</th>
                                        <th>Correo Electronico</th>
                                        
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="card-body" id="formularioregistros">
                            <form name="formulario" id="formulario" method="POST">
                                <h4 class="card-title">Registro de Datos</h4>                                            
                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Nombre</label>
                                        <div class="col-sm-10">
                                            <input type="hidden" name="id_proveedor" id="id_proveedor">
                                            <input type="text" class="form-control minusculas" name="nombre_proveedor" id="nombre_proveedor" maxlength="30" placeholder="Nombre" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Correo Electronico</label>
                                        <div class="col-sm-10">                                                    
                                            <input type="email" class="form-control" name="correo_electronico" id="correo_electronico" maxlength="50" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <!-- FUNCION PARA JS -->
                                        <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="bx bx-save"></i> Guardar</button>
                                        <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                                    </div>
                            </form>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->   
            </div>         
        </div>
    </div>
</div>


<?php
require 'footer.php';
?>
<script type="text/javascript" src="../public/js/JsBarcode.all.min.js"></script>
<script type="text/javascript" src="../public/js/jquery.PrintArea.js"></script>
<script type="text/javascript" src="script/proveedor.js"></script>    

<?php 
ob_end_flush();
?>