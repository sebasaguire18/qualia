<!-- Page Content-->
<div class="container-fluid px-md-3 px-lg-5 px-xl-5 px-xxl-5 my-5">
    <div class="row mb-3 align-items-center justify-content-end">
        <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center justify-content-end pr-3">
            <a class="btn btn-primary px-2 py-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <div class="d-inline-block bi bi-journal-text me-2"></div>
                Contenido del Curso
            </a>
        </div>
    </div>
    <!-- <div class="text-center mb-5">
        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Contenido del curso virtual</span></h1>
    </div> -->
    <div class="row justify-content-center">
        <div class="col-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3 mb-4">
        </div>
        <div class="col-12 col-md-9 col-lg-9 col-xl-9 col-xxl-9">
            
            <section>
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h2 class="text-gradient fw-bolder mb-0">Manipulación de alimentos</h2>
                </div>

                <div class="offcanvas offcanvas-start bg-beige" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Contenido del curso</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ol class="list-group list-group-numbered">
                            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start cursor indiceList" onclick="curso(1)" id="indice-1">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Marco legal</div>
                                </div>
                                <!-- <span class="badge bg-primary rounded-pill">14</span> -->
                            </li>
                            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start cursor indiceList" onclick="curso(2)" id="indice-2">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Conceptos</div>
                                </div>
                                <!-- <span class="badge bg-primary rounded-pill">14</span> -->
                            </li>
                            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start cursor indiceList" onclick="curso(3)" id="indice-3">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">ETAs, contaminación y peligros</div>
                                </div>
                                <!-- <span class="badge bg-primary rounded-pill">14</span> -->
                            </li>
                            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start cursor indiceList" onclick="curso(4)" id="indice-4">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Personal manipulador de alimentos</div>
                                </div>
                                <!-- <span class="badge bg-primary rounded-pill">14</span> -->
                            </li>
                            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start cursor indiceList" onclick="curso(5)" id="indice-5">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Requisitos higiénicos de fabricación</div>
                                </div>
                                <!-- <span class="badge bg-primary rounded-pill">14</span> -->
                            </li>
                            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start cursor indiceList" onclick="curso(6)" id="indice-6">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Locativos</div>
                                </div>
                                <!-- <span class="badge bg-primary rounded-pill">14</span> -->
                            </li>
                            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start cursor indiceList" onclick="curso(7)" id="indice-7">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Equipos y utensilios</div>
                                </div>
                                <!-- <span class="badge bg-primary rounded-pill">14</span> -->
                            </li>
                            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start cursor indiceList" onclick="curso(8)" id="indice-8">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Programa de limpieza y desinfección</div>
                                </div>
                                <!-- <span class="badge bg-primary rounded-pill">14</span> -->
                            </li>
                            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start cursor indiceList" onclick="curso(9)" id="indice-9">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Manejo de residuos sólidos y plagas</div>
                                </div>
                                <!-- <span class="badge bg-primary rounded-pill">14</span> -->
                            </li>
                            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start cursor indiceList" onclick="curso(10)" id="indice-10">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Agua potable</div>
                                </div>
                                <!-- <span class="badge bg-primary rounded-pill">14</span> -->
                            </li>
                        </ol>
                        <ul class="list-group mt-3">
                            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start cursor indiceList" id="indice-11">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Prueba Final</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-between my-3">
                    <button class="btn btn-primary btn-atras" onclick=""><span class="bi bi-arrow-left"> &nbsp Anterior </span></button>
                    <button class="btn btn-primary btn-siguiente" onclick="curso(2)"> Siguiente &nbsp <span class="bi bi-arrow-right"></span></button>
                </div>

                <!-- Modulo del contenido del curso -->
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-title px-2 pt-4 text-center">
                        <h3 class="text-secondary1" id="tituloContenidoCurso">1. &nbsp Marco legal </h3>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center" id="bodyContenidoCurso">
                            <div class="col-12">
                                <div class="row justify-content-center">
                                    <div class="col-6">
                                        <div class="card" aria-hidden="true">
                                            <img src="images/logotipo.png" class="card-img-top m-auto w-25" alt="">
                                            <div class="card-body">
                                                <h5 class="card-title placeholder-glow">
                                                <span class="placeholder col-6"></span>
                                                </h5>
                                                <p class="card-text placeholder-glow">
                                                <span class="placeholder col-7"></span>
                                                <span class="placeholder col-4"></span>
                                                <span class="placeholder col-4"></span>
                                                <span class="placeholder col-6"></span>
                                                <span class="placeholder col-8"></span>
                                                </p>
                                                <a class="btn btn-primary disabled placeholder col-6" aria-disabled="true"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 my-4 text-center text-lg-start mb-lg-0">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam eius amet sapiente exercitationem, ullam officia deserunt at nam corporis a, earum quaerat numquam ab laudantium eveniet, rem eligendi. Atque, quod.
                                Tempore officia facere dolor illum reprehenderit, quae dolores saepe molestias, quisquam accusantium asperiores provident iste necessitatibus eum eos, dicta optio eaque? Facilis exercitationem eos aliquam blanditiis? Adipisci qui dolorum illo!
                                Odio voluptatum explicabo adipisci soluta? Tempora odit hic omnis iusto laudantium, nisi molestiae amet quae ea, totam mollitia magni non beatae autem aspernatur quaerat illum facilis est laborum consequuntur soluta.
                                Laudantium excepturi a, dolorum, numquam cupiditate illo officiis quo quos illum inventore atque? Nobis dolores vitae tempore temporibus maxime dicta qui corporis tempora numquam earum, ipsum, vel cum libero in.
                                </p>
                            </div>
                            <div class="col-6 d-flex justify-content-center">
                                <div class="card" aria-hidden="true">
                                    <img src="images/logotipo.png" class="card-img-top m-auto w-25" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title placeholder-glow">
                                        <span class="placeholder col-6"></span>
                                        </h5>
                                        <p class="card-text placeholder-glow">
                                        <span class="placeholder col-7"></span>
                                        <span class="placeholder col-4"></span>
                                        <span class="placeholder col-4"></span>
                                        <span class="placeholder col-6"></span>
                                        <span class="placeholder col-8"></span>
                                        </p>
                                        <a class="btn btn-primary disabled placeholder col-6" aria-disabled="true"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 d-flex justify-content-center">
                                <div class="card" aria-hidden="true">
                                    <img src="images/logotipo.png" class="card-img-top m-auto w-25" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title placeholder-glow">
                                        <span class="placeholder col-6"></span>
                                        </h5>
                                        <p class="card-text placeholder-glow">
                                        <span class="placeholder col-7"></span>
                                        <span class="placeholder col-4"></span>
                                        <span class="placeholder col-4"></span>
                                        <span class="placeholder col-6"></span>
                                        <span class="placeholder col-8"></span>
                                        </p>
                                        <a class="btn btn-primary disabled placeholder col-6" aria-disabled="true"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 my-4 text-center text-lg-start mb-lg-0">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam eius amet sapiente exercitationem, ullam officia deserunt at nam corporis a, earum quaerat numquam ab laudantium eveniet, rem eligendi. Atque, quod.
                                Tempore officia facere dolor illum reprehenderit, quae dolores saepe molestias, quisquam accusantium asperiores provident iste necessitatibus eum eos, dicta optio eaque? Facilis exercitationem eos aliquam blanditiis? Adipisci qui dolorum illo!
                                Odio voluptatum explicabo adipisci soluta? Tempora odit hic omnis iusto laudantium, nisi molestiae amet quae ea, totam mollitia magni non beatae autem aspernatur quaerat illum facilis est laborum consequuntur soluta.
                                Laudantium excepturi a, dolorum, numquam cupiditate illo officiis quo quos illum inventore atque? Nobis dolores vitae tempore temporibus maxime dicta qui corporis tempora numquam earum, ipsum, vel cum libero in.
                                </p>
                            </div>
                            <!-- <div class="col-lg-8"><div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus laudantium, voluptatem quis repellendus eaque sit animi illo ipsam amet officiis corporis sed aliquam non voluptate corrupti excepturi maxime porro fuga.</div></div> -->
                        </div>
                    </div>
                </div>
                
                <div class="d-flex align-items-center justify-content-between my-3">
                    <button class="btn btn-primary btn-atras" onclick=""><span class="bi bi-arrow-left"> &nbsp Anterior </span></button>
                    <button class="btn btn-primary btn-siguiente" onclick="curso(2)"> Siguiente &nbsp <span class="bi bi-arrow-right"></span></button>
                </div>
                
            </section>
        </div>
    </div>
</div>
<script>
    curso(1);
</script>