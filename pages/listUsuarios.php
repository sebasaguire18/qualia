
<?php include '../php/function.php'; ?>

<div class="row col-12 shadow navbar navbar-expand-lg navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenulistUsuarios" aria-controls="navbarMenulistUsuarios" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse row" id="navbarMenulistUsuarios">
        <nav class="col-12 col-md-6 d-flex flex-md-row">
            <a class="nav-link cursor m-auto" title="Crear Nuevo Usuario" data-toggle="modal" data-target="#nuevoUsuario"><span class="bi bi-person-plus h1 text-primary hoverH3"></span></a>
            <!-- <a class="nav-link cursor m-auto" title="lista de Usuarios Cancelados" data-toggle="modal" data-target="#listUsuariosCancelados"><span class="bi bi-file-earmark-excel h3 text-primary hoverH3"></span></a>
            <a class="nav-link cursor m-auto" title="Generar Nuevo Usuario" data-toggle="modal" data-target="#generarUsuario"><span class="bi bi-file-earmark-medical h3 text-primary hoverH3"></span></a> -->
        </nav>
        <!-- <nav class="col-12 col-md-6 d-flex flex-md-row justify-content-end">
            <a class="nav-link cursor m-auto" title="" data-toggle="modal" data-target="#"><span class="bi bi-plus-circle h3 text-primary hoverH3"></span></a>
            <a class="nav-link cursor m-auto" title="" data-toggle="modal" data-target="#"><span class="bi bi-plus-circle h3 text-primary hoverH3"></span></a>
            <a class="nav-link cursor m-auto" title="" data-toggle="modal" data-target="#"><span class="bi bi-plus-circle h3 text-primary hoverH3"></span></a>
        </nav> -->
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
                <div class="text-center mb-5">
                    <h1 class="fw-bolder">Registrar Usuario</h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <form id="formRegistrarUsuarioAdmin">
                            <div class="form-floating mb-3">
                                <label for="nameUsuarioAdmin">Nombre completo</label>
                                <input class="form-control" id="nameUsuarioAdmin" type="text" placeholder="Nombre completo" />
                                <div class="text-danger d-none" id="spanNameUsuarioAdmin"> Por favor ingresa un nombre</div>
                            </div>
                            <div class="form-floating mb-3">
                                <label for="dniUsuarioAdmin">Documento de identidad <i>(sin puntos)</i></label>
                                <input class="form-control" id="dniUsuarioAdmin" type="text" placeholder="documento sin puntos" />
                                <div class="text-danger d-none" id="spanDniUsuarioAdmin">Por favor ingresa el documento con solo valores numericos</div>
                                <div class="text-danger d-none" id="spanDniUsuarioAdminError">El documento ya se encuentra registrado, comuniquese con un asesor</div>
                            </div>
                            <div class="form-floating mb-3">
                                <label for="ciudadUsuarioAdmin">Ciudad de expedición, Ejm: Armenia Q</label>
                                <input class="form-control" id="ciudadUsuarioAdmin" type="text" placeholder="Ejm: Armenia Q" />
                                <div class="text-danger d-none" id="spanCiudadUsuarioAdmin"> Por favor ingresa una ciudad valido</div>
                            </div>
                            <div class="form-floating mb-3">
                                <label for="emailUsuarioAdmin">Email</label>
                                <input class="form-control" id="emailUsuarioAdmin" type="text" placeholder="Email" />
                                <div class="text-danger d-none" id="spanEmailUsuarioAdmin"> Por favor ingresa un email valido</div>
                                <span class="text-danger d-none" id="spanEmailUsuarioAdminError">Email encontrado, modifique el email</span>
                            </div>
                            <div class="form-floating mb-3">
                                <label for="passUsuarioAdmin">Contraseña</label>
                                <input class="form-control" id="passUsuarioAdmin" type="password" placeholder="Contraseña" />
                                <div class="text-danger d-none" id="spanPassUsuarioAdmin">Por favor ingresa la contraseña</div>
                            </div>
                        </form>
                    </div>
                </div>
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