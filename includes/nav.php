<nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
    <div class="container px-5">
        <a class="navbar-brand w-25"><span class="fw-bolder text-primary" id="imgIsotipo"><img src="images/isotipo.png" class="mw-60px" width="65%"></span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                
                <?php   
                    if($_SESSION['userID']){
                ?>
                        <li class="nav-item"><a class="cursor nav-link nav-linkRealizarCurso" onclick="contenido('realizarCurso',2)" >Realizar Curso</a></li>
                        <li class="nav-item"><a class="cursor nav-link nav-linkMisCursos" onclick="contenido('misCursos',2)" >Mis cursos</a></li>
                        <li class="nav-item"><a class="cursor nav-link" href="php/cerrarsesion.php" title="Cerrar Sesión"><span class="bi bi-box-arrow-right h4 text-danger"></span></a></li>
                <?php
                        }else{
                ?>
                        <li class="nav-item"><a class="cursor nav-link nav-linkInicio"  onclick="contenido('inicio',1)">Inicio</a></li>
                        <li class="nav-item"><a class="cursor nav-link nav-linkContenido" onclick="contenido('contenido',1)" >Contenido Del Curso</a></li>
                        <li class="nav-item"><a class="cursor nav-link nav-link" onclick="contenido('',1)" >Projects</a></li>
                        <li class="nav-item"><a class="cursor nav-link nav-linkLogin" onclick="contenido('login',1)" ><span class="bi bi-person h4"></span> |  <span class="bi bi-person-plus h4"></span></a></li>
                <?php
                        }
                ?>
            </ul>
        </div>
    </div>
</nav>