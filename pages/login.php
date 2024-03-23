
<section class="py-5">
    <div class="container px-5">
        <div class="bg-light rounded-4 py-5 px-4 px-md-5" id="box-sesion">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-person"></i></div>
                <h1 class="fw-bolder">Inicio de Sesión</h1>
                <p class="lead fw-normal text-muted mb-0">Inicia sesión para realizar o continuar el curso.</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <form id="formInicioSesion">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="usernameLoging" type="text" placeholder="Email" />
                            <label for="usernameLoging">Email</label>
                            <div class="text-danger d-none" id="spanUserLoging"> Por favor ingresa un email valido</div>
                            <span class="text-danger d-none" id="spanUserLogingError">Email no encontrado</span>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="passLoging" type="password" placeholder="Contraseña" />
                            <label for="passLoging">Contraseña</label>
                            <div class="text-danger d-none" id="spanPassLoging">Por favor ingresa la contraseña</div>
                            <span class="text-danger d-none" id="spanPassLogingError">Contraseña erronea</span>
                        </div>
                        <div class="my-5">
                            <label onclick="changeForm('regis')" class="text-secondary cursor">¿No tienes cuenta?</label>
                        </div>
                        <div class="d-grid"><a class="btn btn-primary btn-lg" id="btnIniciarSesion" onclick="iniciarSesion()">Validar   </a></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="bg-light rounded-4 py-5 px-4 px-md-5 d-none" id="box-regis">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-person"></i></div>
                <h1 class="fw-bolder">Registrar Usuario</h1>
                <p class="lead fw-normal text-muted mb-0">Registrate para realizar el curso.</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <form id="formRegistrarUsuario">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="nameUsuario" type="text" placeholder="Nombre completo" />
                            <label for="nameUsuario">Nombre completo</label>
                            <div class="text-danger d-none" id="spanNameUsuario"> Por favor ingresa un nombre</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="dniUsuario" type="text" placeholder="documento sin puntos" />
                            <label for="dniUsuario">Documento de identidad <i>(sin puntos)</i></label>
                            <div class="text-danger d-none" id="spanDniUsuario">Por favor ingresa el documento con solo valores numericos</div>
                            <div class="text-danger d-none" id="spanDniUsuarioError">El documento ya se encuentra registrado, comuniquese con un asesor</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="ciudadUsuario" type="text" placeholder="Ejm: Armenia Q" />
                            <label for="ciudadUsuario">Ciudad de expedición</label>
                            <div class="text-danger d-none" id="spanCiudadUsuario"> Por favor ingresa una ciudad valido</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="emailUsuario" type="text" placeholder="Email" />
                            <label for="emailUsuario">Email</label>
                            <div class="text-danger d-none" id="spanEmailUsuario"> Por favor ingresa un email valido</div>
                            <span class="text-danger d-none" id="spanEmailUsuarioError">Email encontrado, modifique el email</span>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="passUsuario" type="password" placeholder="Contraseña" />
                            <label for="passUsuario">Contraseña</label>
                            <div class="text-danger d-none" id="spanPassUsuario">Por favor ingresa la contraseña</div>
                        </div>

                        <div class="my-5">
                            <label onclick="changeForm('ini')" class="text-secondary cursor">¿Ya tienes una cuenta?</label>
                        </div>
                        <div class="d-grid"><a class="btn btn-primary btn-lg" id="btnRegistrarUsuario" onclick="registrarUsuario()">Validar</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>