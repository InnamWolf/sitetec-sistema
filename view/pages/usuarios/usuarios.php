<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Usuarios</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Usuarios</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
<!-- Contenido -->
    <section class="content"> 

        <div class="card">
            <div class="card-header">

                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                    Agregar Usuario
                </button>                
                
            </div>

            <div class="card-body">
                
                <table id="tablaUsuarios" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Perfil</th>
                        <th>Estado</th>
                        <th>Creado</th>
                        <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $item = null;
                            $valor = null;
                            $usuarios = UsuariosControlador::ctrMostrarUsuarios($item, $valor);
                            
                            foreach ($usuarios as $key => $value) {
                    
                                echo '
                                <tr>
                                    <td style="width:10px;">'.$value["id"].'</td>
                                    <td>'.ucfirst($value["nombre"]).' '.ucfirst($value["apellido_paterno"]).' '.ucfirst($value["apellido_materno"]).'</td>
                                    <td>'.$value["correo"].'</td>
                                    <td>'.ucfirst($value["rol"]).'</td>
                                    <td>'.$value["fecha_creacion"].'</td>
                                    <td><button type="button" class="btn btn-block btn-success btn-xs">Activo</button></td>                    
                                    <td>
                                        <div class="btn-group">
                                        <button type="button" class="btn btn-warning">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        </div>
                                    </td>                                    
                                </tr>     
                                ';            
                            }
                        ?>                        
                    </tbody>                    
                </table>
            </div>
        </div>
    </section>    
</div>

<!-- DATA TABLE QUERY -->
<script src="view/src/custom/datatable/datatable.js"></script>

<!-- Modales -->
<div class="modal fade" id="modal-default">
    <div  iv class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Agregar Usuario</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success">Guardar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
<!-- /.modal-dialog -->
</div>