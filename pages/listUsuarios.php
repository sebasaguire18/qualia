
<?php include '../php/function.php'; ?>

<div class="row col-12 shadow navbar navbar-expand-lg navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenulistUsuarios" aria-controls="navbarMenulistUsuarios" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse row" id="navbarMenulistUsuarios">
        <nav class="col-12 col-md-6 d-flex flex-md-row">
            <a class="nav-link cursor m-auto" title="Crear Nuevo Usuario" data-toggle="modal" data-target="#nuevoUsuario"><span class="bi bi-file-earmark-plus h3 text-primary hoverH3"></span></a>
            <a class="nav-link cursor m-auto" title="lista de Usuarios Cancelados" data-toggle="modal" data-target="#listUsuariosCancelados"><span class="bi bi-file-earmark-excel h3 text-primary hoverH3"></span></a>
            <a class="nav-link cursor m-auto" title="Generar Nuevo Usuario" data-toggle="modal" data-target="#generarUsuario"><span class="bi bi-file-earmark-medical h3 text-primary hoverH3"></span></a>
        </nav>
        <nav class="col-12 col-md-6 d-flex flex-md-row justify-content-end">
            <a class="nav-link cursor m-auto" title="" data-toggle="modal" data-target="#"><span class="bi bi-plus-circle h3 text-primary hoverH3"></span></a>
            <a class="nav-link cursor m-auto" title="" data-toggle="modal" data-target="#"><span class="bi bi-plus-circle h3 text-primary hoverH3"></span></a>
            <a class="nav-link cursor m-auto" title="" data-toggle="modal" data-target="#"><span class="bi bi-plus-circle h3 text-primary hoverH3"></span></a>
        </nav>
    </div>
</div>

<div class="row col-12 d-flex align-items-center">
    <hr class="my-4 border-bottom border-1">
</div>

<div class="row col-12 table-responsive" id="tblLisUsuarios">
    
</div>


<!-- modal de nueva Usuarios -->

<div class="modal fade" id="nuevoUsuario" tabindex="-1" role="dialog" aria-labelledby="nuevaUsuarioTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Registrar Nuevo Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="my-3 p-2" id="alertNuevoUsuario">
                </div>
                <form id="formNuevoUsuario">
                    <div class="form-row d-flex justify-content-center">
                        <div class="form-group col-md-10">
                            <label for="inputNombreUsuario">Nombre Usuario:</label>
                            <input type="text" class="form-control" id="inputNombreUsuario" required>
                        </div>
                        <div class="form-group col-md-5">
                            <label for="inputIntHoraria">Intensidad Horaria:</label>
                            <input type="number" class="form-control" id="inputIntHoraria" min="1" step="1" value="1" required>
                        </div>
                        <div class="form-group col-md-5">
                            <label for="inputTipoUsuario">Tipo de Usuario:</label>
                            <select id="inputTipoUsuario" class="form-control">
                                <option value="1" selected>Corto</option>
                                <option value="2">Técnico</option>
                                <option value="3">Tecnológico</option>
                                <option value="4">Profesional</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="btnDismissNuevoUsuario" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" onclick="insertarNuevoUsuario()">Guardar</button>
            </div>
        </div>
    </div>
</div>

<!-- modal de lista de Usuarios canceladas -->
<div class="modal fade" id="listUsuariosCancelados" tabindex="-1" role="dialog" aria-labelledby="nuevalistUsuariosTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Usuarios Cancelados</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row col-12 table-responsive">
                    <table class="table table-striped">
                        <thead class="bg-primary">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th>1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th>1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th>1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- modal de generar nuevo Usuarios -->

<div class="modal fade" id="generarUsuario" tabindex="-1" role="dialog" aria-labelledby="nuevaUsuarioTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Generar Nuevo Usuario por Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-row">
                        
                        <div class="form-group col-md-4">
                            <label for="inputState">State</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">State</label>
                            <?php selectUsuarios(1,'Usu'); ?>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputZip">Zip</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>