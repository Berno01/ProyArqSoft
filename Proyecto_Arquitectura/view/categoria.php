<?php
//Activamos el almacenamiento en el buffer
ob_start();
session_start();

require 'header.php';

?>
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content" id="miniaresult">
                <div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Categorías de Productos &nbsp; 
                                        <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="bx bx-add-to-queue"></i> Nuevo</button></h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Escritorio</a></li>
                                            <li class="breadcrumb-item active">Categorias</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                <div class="card-body" id="listadoregistros">
                                    <h4 class="card-title">Tipo de categoria</h4>
                                    <table id="tbllistado" class="table table-striped" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tfoot>
                                        </tfoot>
                                    </table>
                                </div>
                                    <div class="card-body" id="formularioregistros">
                                        <form name="formulario" id="formulario" method="POST">
                                            <h4 class="card-title">Ingresar valor</h4>                                            
                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Nombre de categoria</label>
                                                <div class="col-sm-10">
                                                    <input type="hidden" name="idcategoria" id="idcategoria">
                                                    <input class="form-control mayusculas" type="text" placeholder="Nombre" maxlength="100" id="nombre" name="nombre" required>
                                                </div>
                                            </div>                            
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="bx bx-save"></i> Guardar</button>
                                                <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->            
                </div>
            </div>    

            
            <?php
//{
  //require 'noacceso.php';
//}


require 'footer.php';
?>
<script type="text/javascript" src="script/categoria.js"></script>   
<?php
ob_end_flush();
?>