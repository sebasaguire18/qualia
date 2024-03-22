<?php 
    include '../php/function.php';
    
    session_start(); 
    $user_id = $_SESSION['userID'];
    $user_dni = $_SESSION['userDNI'];
?>
<!-- Projects Section-->
<section class="py-5">
    <div class="container px-5 mb-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Mis Cursos</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                <!-- Project Card 1-->
                <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="p-5">
                                <h2 class="fw-bolder">Manipulación de Alimentos</h2>
                                <p>Certificado y Carnet aprobados, puedes descargarlos en los siguientes enlaces</p>
                                <?php if (validarCertificado($user_dni) == 1) { ?>
                                    <div class="text-center">
                                        <a class="btn btn-primary px-4 py-3 my-3 shadow" target="_blank" href="extensions/pdf/index.php?paramPDF=certificado&dni=<?php echo $user_dni; ?>">
                                            <div class="d-inline-block bi bi-download me-2"></div>
                                                Descargar Certificado
                                            <div class="d-inline-block bi bi-file-earmark-pdf me-2 h5"></div>
                                        </a>
                                        <a class="btn btn-primary px-4 py-3 my-3 shadow" target="_blank" href="extensions/pdf/indexCarnet.php?paramPDF=certificado&dni=<?php echo $user_dni; ?>">
                                            <div class="d-inline-block bi bi-download me-2"></div>
                                                Descargar Carnet
                                            <div class="d-inline-block bi bi-file-earmark-pdf me-2 h5"></div>
                                        </a>
                                    </div>
                                <?php }else{ ?>
                                    <div class="text-center">
                                        <div class="alert alert-danger p-2 py-3 m-0" role="alert">
                                            <span class="bi bi-exclamation-octagon"></span> <b>No tienes certificados aprobados</b>
                                        </div>
                                        <a class="btn btn-primary px-4 py-3 my-3 shadow disabled" title="No te has certificado aún">
                                            <div class="d-inline-block bi bi-download me-2"></div>
                                                Descargar Certificado
                                            <div class="d-inline-block bi bi-file-earmark-pdf me-2 h5"></div>
                                        </a>
                                        <a class="btn btn-primary px-4 py-3 my-3 shadow disabled" title="No te has certificado aún">
                                            <div class="d-inline-block bi bi-download me-2"></div>
                                                Descargar Carnet
                                            <div class="d-inline-block bi bi-file-earmark-pdf me-2 h5"></div>
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="w-100 d-flex align-items-center justify-content-center">
                                <img class="img-fluid" src="images/profile1.png" width="90%" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 
<section class="py-5 bg-gradient-primary-to-secondary text-white">
    <div class="container px-5 my-5">
        <div class="text-center">
            <h2 class="display-4 fw-bolder mb-4">Let's build something together</h2>
            <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="contact.html">Contact me</a>
        </div>
    </div>
</section> -->

