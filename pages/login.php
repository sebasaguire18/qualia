
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
                    <form>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Nombre completo" />
                            <label for="name">Nombre completo</label>
                            <div class="invalid-feedback">A name is required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Tipo de documento" />
                            <label for="name">Tipo de documento</label>
                            <div class="invalid-feedback">A name is required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Número de documento" />
                            <label for="name">Número de documento</label>
                            <div class="invalid-feedback">A name is required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Email" />
                            <label for="name">Email</label>
                            <div class="invalid-feedback">A name is required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="pass" type="pass" placeholder="Contraseña" />
                            <label for="pass">Contraseña</label>
                            <div class="invalid-feedback">An email is required.</div>
                            <div class="invalid-feedback">Email is not valid.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" />
                            <label for="phone">Phone number</label>
                            <div class="invalid-feedback">A phone number is required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem"></textarea>
                            <label for="message">Message</label>
                            <div class="invalid-feedback">A message is required.</div>
                        </div>
                        <div class="my-5">
                            <label onclick="changeForm('ini')" class="text-secondary cursor">¿No tienes cuenta?</label>
                            <div class="invalid-feedback">A phone number is required.</div>
                        </div>
                        <div class="d-grid"><button class="btn btn-primary btn-lg" id="btnIniciarSesion" >Iniciar Sesión</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>