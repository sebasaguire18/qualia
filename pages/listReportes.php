
<?php include '../php/function.php'; ?>
<script src="js/function.js"></script>

<div class="row col-12 shadow navbar navbar-expand-lg navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenulistCertificados" aria-controls="navbarMenulistCertificados" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse row" id="navbarMenulistCertificados">
        <nav class="col-12 col-md-6 d-flex flex-md-row">
            <a class="nav-link cursor m-auto" title="Crear Nuevo Certificado" data-toggle="modal" data-target="#nuevoCertificado"><span class="bi bi-file-earmark-plus h3 text-primary hoverH3"></span></a>
            <a class="nav-link cursor m-auto" title="lista de Certificados Cancelados" data-toggle="modal" data-target="#listCertificadosCancelados"><span class="bi bi-file-earmark-excel h3 text-primary hoverH3"></span></a>
            <a class="nav-link cursor m-auto" title="Generar Nuevo Certificado" data-toggle="modal" data-target="#generarCertificado"><span class="bi bi-file-earmark-medical h3 text-primary hoverH3"></span></a>
        </nav>
        <nav class="col-12 col-md-6 d-flex flex-md-row justify-content-end">
            <a class="nav-link cursor m-auto" title="Firmas Certificados" data-toggle="modal" data-target="#firmaCertificados"><span class="bi bi-pen h3 text-primary hoverH3"></span></a>
            <a class="nav-link cursor m-auto" title="" data-toggle="modal" data-target="#"><span class="bi bi-plus-circle h3 text-primary hoverH3"></span></a>
            <a class="nav-link cursor m-auto" title="" data-toggle="modal" data-target="#"><span class="bi bi-plus-circle h3 text-primary hoverH3"></span></a>
        </nav>
    </div>
</div>

<div class="row col-12 d-flex align-items-center">
    <hr class="my-4 border-bottom border-1">
</div>

<div class="row col-12 table-responsive" id="tblLisCertificados">
    <div class="row text-center">
        <div class="col-12">
            <img src="images/cargando.gif" width="15%" class="">
        </div>
    </div>
</div>


<!-- modal de nueva Certificados -->

<div class="modal fade" id="nuevoCertificado" tabindex="-1" role="dialog" aria-labelledby="nuevaCertificadoTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Registrar Nuevo Certificado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="my-3 p-2" id="alertNuevoCertificado">
                </div>
                <form id="formNuevoCertificado">
                    <div class="form-row d-flex justify-content-center">
                        <div class="form-group col-md-10">
                            <label for="inputNombreCertificado">Nombre Certificado:</label>
                            <input type="text" class="form-control" id="inputNombreCertificado" required>
                        </div>
                        <div class="form-group col-md-5">
                            <label for="inputIntHoraria">Intensidad Horaria:</label>
                            <input type="number" class="form-control" id="inputIntHoraria" min="1" step="1" value="1" required>
                        </div>
                        <div class="form-group col-md-5">
                            <label for="inputTipoCertificado">Tipo de Certificado:</label>
                            <select id="inputTipoCertificado" class="form-control">
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
                <button type="button" class="btn btn-secondary" id="btnDismissNuevoCertificado" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" onclick="insertarNuevoCertificado()">Guardar</button>
            </div>
        </div>
    </div>
</div>

<!-- modal de lista de Certificados canceladas -->

<div class="modal fade" id="listCertificadosCancelados" tabindex="-1" role="dialog" aria-labelledby="nuevalistCertificadosTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Certificados Cancelados</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row col-12 table-responsive" id="tblLisCertificadosCancel">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal de generar nuevo Certificados -->

<div class="modal fade" id="generarCertificado" tabindex="-1" role="dialog" aria-labelledby="nuevaCertificadoTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Generar Nuevo Certificado por Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-row my-4">
                        <div class="form-group col-md-6">
                            <label for="inputState">Certificado en:</label>
                            <?php selectCertificados(1,'generarCert'); ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="optionsCedulas01">A nombre de:</label>
                            <select class="choices form-select multiple-remove" id="optionsCedulas01">
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Mostrar plantilla</button>
            </div>
        </div>
    </div>
</div>

<!-- modal de firmas para certificados -->

<div class="modal fade" id="firmaCertificados" tabindex="-1" role="dialog" aria-labelledby="nuevalistFirmaTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Firmas Certificados</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="btnDismissNuevaFiorma">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="my-3 p-2" id="alertNuevaFirma">
                </div>
                <div class="row col-12 table-responsive">
                    <nav class="col-12 row justify-content-end align-items-center m-0 p-0 py-2">
                        <div class="col-md-11 col-12">
                            <form action="php/controler.php" method="POST" enctype="multipart/form-data" class="m-auto collapse" id="formNuevaFirma">
                                <div class="form-row d-flex justify-content-center">
                                    <div class="form-group col-md-4 col-12">
                                        <input type="text" class="form-control" name="inputNombreFirma" id="inputNombreFirma" placeholder="Nombre" required>
                                    </div>
                                    <div class="form-group col-md-4 col-12 custom-file">
                                        <input type="file" class="fileInput cursor" name="customFile" id="customFile">
                                        <label class="custom-file-label cursor" for="customFile">Elegir Imagen</label>
                                    </div>
                                    <div class="form-group col-md-2 col-12 text-center py-md-0 py-2">
                                        <button type="submit" name="tipo" value="nuevaFirma" onclick="insertarNuevaFirma()" class="btn btn-primary m-auto">Guardar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <a class="nav-link cursor col-1 m-auto" title="Nueva firma" id="collapseNuevaFirma" data-toggle="collapse" data-target="#formNuevaFirma" aria-expanded="false"><span class="bi bi-plus-circle h3 text-teal hoverH3"></span></a>
                    </nav>
                    
                    <div class="col-12" id="tblLisFirmas">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


