<?php 
    session_start();
    $user_id = $_SESSION['userID'];
    include '../php/function.php'; 
?>
<section class="py-5">
    <div class="container px-5">
        <div class="bg-light rounded-4 py-5 px-4 px-md-5" id="box-sesion">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-person"></i></div>
                <h1 class="fw-bolder">Perfil</h1>
                <p class="lead fw-normal text-muted mb-0">Gestiona los datos personales.</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <form id="form">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="perfilNombre" type="text" placeholder="Nombre" value="<?php echo perfil($user_id,'usu_nombre'); ?>">
                            <label for="perfilNombre">Nombre</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="perfilDni" type="text" placeholder="Dni" value="<?php echo perfil($user_id,'usu_dni'); ?>">
                            <label for="perfilDni">Documento de identidad <i>(sin puntos)</i></label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="perfilCiudad" type="text" placeholder="ciudad" value="<?php echo perfil($user_id,'usu_ciudad_dep'); ?>">
                            <label for="perfilCiudad">Ciudad de expedición, Ejm: Armenia Q</label>
                        </div>
                        <div class="d-grid"><a class="btn btn-primary btn-lg" id="btnPerfil" onclick="guardarDatosPerfil()">Validar</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>