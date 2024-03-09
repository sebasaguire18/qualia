<?php
    session_start();
    error_reporting(0);
    if($_SESSION['userID']){
        $usu_id=$_SESSION['userID'];
        $usuRol = $_SESSION['userROL'];

        if ($usuRol == '64645990cb1d4') {
            header("location: ../welcome.php");
        }

?>
<!doctype html>
<html lang="es">
<head>
    <title id="titlePage">Validación de prueba</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../extensions/choices.js/choices.css">
    <link rel="stylesheet" href="../fonts/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/style.css">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico" />
    <!-- Custom Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />

</head>
<body class="d-flex flex-column h-100">
        
    
    <!-- Page Content  -->
    <main class="flex-shrink-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
            <div class="container">
                <a class="navbar-brand w-25"><span class="fw-bolder text-primary" id="imgIsotipo"><img src="../images/isotipo.png" class="mw-60px" width="65%"></span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                        
                        <?php   
                            session_start();
                            if($_SESSION['userID']){
                        ?>
                                <li class="nav-item"><a class="cursor nav-link nav-linkLogin" onclick="contenido('realizarCurso',3)" >Realizar Curso</a></li>
                                <li class="nav-item"><a class="cursor nav-link nav-linkLogin" onclick="contenido('login',2)" ><span class="bi bi-person h4"></span></a></li>
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

        <div id="contentIndexCurso" class="my-5 px-5">
            <div class="row">                    
                    <?php
                        $tipo = $_POST['tipo'];
                        if ($tipo == 'pruebaFinal') {
                    ?>
                <div class="col-10 m-auto">
                    <?php    
                        $pregunta_1 = $_POST['pregunta_1'];
                        $pregunta_2 = $_POST['pregunta_2'];
                        $pregunta_3 = $_POST['pregunta_3'];
                        $pregunta_4 = $_POST['pregunta_4'];
                        $pregunta_5 = $_POST['pregunta_5'];
                        $pregunta_6 = $_POST['pregunta_6'];
                        $pregunta_7 = $_POST['pregunta_7'];
                        $pregunta_8 = $_POST['pregunta_8'];
                        $pregunta_9 = $_POST['pregunta_9'];
                        $pregunta_10 = $_POST['pregunta_10'];
                        
                        if ( $pregunta_1 == "" ||  $pregunta_2 == "" ||  $pregunta_3 == "" ||  $pregunta_4 == "" ||  $pregunta_5 == "" ||  $pregunta_6 == "" ||  $pregunta_7 == "" ||  $pregunta_8 == "" ||  $pregunta_9 == "" ||  $pregunta_10 == "")  {
                            $html = '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                                        <h5 class="alert-heading">¡¡ Algo salió mal, todas las repuestas deben ser contestadas !! </h5>
                                        <button type="button" class="btn btn-danger" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">Cerrar</span>
                                        </button>
                                    </div>';

                            echo $html;
                        }else {
                            $rescorrect_1 = 1;
                            $rescorrect_2 = 4;
                            $rescorrect_3 = 2;
                            $rescorrect_4 = 3;
                            $rescorrect_5 = 1;
                            $rescorrect_6 = 1;
                            $rescorrect_7 = 4;
                            $rescorrect_8 = 3;
                            $rescorrect_9 = 2;
                            $rescorrect_10 = 1;

                            $rescorrect = 0;
                            $porcentaje = 0;
                            
                            if ($pregunta_1 == $rescorrect_1) {
                                $rescorrect = $rescorrect+1;

                                $porcentaje = ($rescorrect * 100)/10;

                            }
                            if ($pregunta_2 == $rescorrect_2) {
                                $rescorrect = $rescorrect+1;

                                $porcentaje = ($rescorrect * 100)/10;

                            }
                            if ($pregunta_3 == $rescorrect_3) {
                                $rescorrect = $rescorrect+1;

                                $porcentaje = ($rescorrect * 100)/10;

                            }
                            if ($pregunta_4 == $rescorrect_4) {
                                $rescorrect = $rescorrect+1;

                                $porcentaje = ($rescorrect * 100)/10;

                            }
                            if ($pregunta_5 == $rescorrect_5) {
                                $rescorrect = $rescorrect+1;

                                $porcentaje = ($rescorrect * 100)/10;

                            }
                            if ($pregunta_6 == $rescorrect_6) {
                                $rescorrect = $rescorrect+1;

                                $porcentaje = ($rescorrect * 100)/10;

                            }
                            if ($pregunta_7 == $rescorrect_7) {
                                $rescorrect = $rescorrect+1;

                                $porcentaje = ($rescorrect * 100)/10;

                            }
                            if ($pregunta_8 == $rescorrect_8) {
                                $rescorrect = $rescorrect+1;

                                $porcentaje = ($rescorrect * 100)/10;

                            }
                            if ($pregunta_9 == $rescorrect_9) {
                                $rescorrect = $rescorrect+1;

                                $porcentaje = ($rescorrect * 100)/10;

                            }
                            if ($pregunta_10 == $rescorrect_10) {
                                $rescorrect = $rescorrect+1;

                                $porcentaje = ($rescorrect * 100)/10;

                            }

                            if ($porcentaje>=50) {

                                ?>
                                    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                                        <h4 class="alert-heading"> <strong>!! Felicitaciones pasaste la prueba ¡¡</strong></h4> <hr> <h5> El porcentaje de la prueba fue de:  <?php echo $porcentaje; ?>% </h5>
                                        
                                        <br>
                                        <h6>Comunicate con un asesor para solicitar el certificado y el carnet de manipulación de alimentos.</h6>
                                        
                                        <button type="button" class="btn btn-outline-dark">
                                            <span>Comunicar un asesor</span>
                                        </button>
                                    </div>

                                    
                                <?php

                            }else {
                                ?>
                                    <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                                        <h4 class="alert-heading"> <strong>Lo sentimos debes de verificar algunas respuestas.</strong></h4> <hr> <h5> El porcentaje de la prueba fue de:  <?php echo $porcentaje; ?>% </h5>
                                        <button type="button" class="btn btn-danger" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">Cerrar</span>
                                        </button>
                                    </div>
                                <?php
                            }

                        }
                    ?>
                </div>
                    <?php
                        }
                    ?>

                <div class="col-12 col-md-8 col-lg-8 col-xl-8 m-auto" id="contenidoValidar">
                    <form action="#" method="POST">
                        <ol>
                            <div class="">
                                <li>
                                    <p>Primer pregunta</p>
                                </li>
                                <input type="radio" name="pregunta_1" value="1" id="respuesta_1_1" <?php if($pregunta_1 == '1') echo 'checked'; ?>><label for="respuesta_1_1" class="cursor mx-3"> Respuesta 1</label><br>
                                <input type="radio" name="pregunta_1" value="2" id="respuesta_2_1" <?php if($pregunta_1 == '2') echo 'checked'; ?>><label for="respuesta_2_1" class="cursor mx-3"> Respuesta 2</label><br>
                                <input type="radio" name="pregunta_1" value="3" id="respuesta_3_1" <?php if($pregunta_1 == '3') echo 'checked'; ?>><label for="respuesta_3_1" class="cursor mx-3"> Respuesta 3</label><br>
                                <input type="radio" name="pregunta_1" value="4" id="respuesta_4_1" <?php if($pregunta_1 == '4') echo 'checked'; ?>><label for="respuesta_4_1" class="cursor mx-3"> Respuesta 4</label>
                            </div>
                            <div class="mt-4">
                                <li>
                                    <p>Pregunta #2</p>
                                </li>
                                <input type="radio" name="pregunta_2" value="1" id="respuesta_1_2" <?php if($pregunta_2 == '1') echo 'checked'; ?>><label for="respuesta_1_2" class="cursor mx-3"> Respuesta 1</label><br>
                                <input type="radio" name="pregunta_2" value="2" id="respuesta_2_2" <?php if($pregunta_2 == '2') echo 'checked'; ?>><label for="respuesta_2_2" class="cursor mx-3"> Respuesta 2</label><br>
                                <input type="radio" name="pregunta_2" value="3" id="respuesta_3_2" <?php if($pregunta_2 == '3') echo 'checked'; ?>><label for="respuesta_3_2" class="cursor mx-3"> Respuesta 3</label><br>
                                <input type="radio" name="pregunta_2" value="4" id="respuesta_4_2" <?php if($pregunta_2 == '4') echo 'checked'; ?>><label for="respuesta_4_2" class="cursor mx-3"> Respuesta 4</label>
                            </div>
                            <div class="mt-4">
                                <li>
                                    <p>Pregunta #3</p>
                                </li>
                                <input type="radio" name="pregunta_3" value="1" id="respuesta_1_3" <?php if($pregunta_3 == '1') echo 'checked'; ?>><label for="respuesta_1_3" class="cursor mx-3"> Respuesta 1</label><br>
                                <input type="radio" name="pregunta_3" value="2" id="respuesta_2_3" <?php if($pregunta_3 == '2') echo 'checked'; ?>><label for="respuesta_2_3" class="cursor mx-3"> Respuesta 2</label><br>
                                <input type="radio" name="pregunta_3" value="3" id="respuesta_3_3" <?php if($pregunta_3 == '3') echo 'checked'; ?>><label for="respuesta_3_3" class="cursor mx-3"> Respuesta 3</label><br>
                                <input type="radio" name="pregunta_3" value="4" id="respuesta_4_3" <?php if($pregunta_3 == '4') echo 'checked'; ?>><label for="respuesta_4_3" class="cursor mx-3"> Respuesta 4</label>
                            </div>
                            <div class="mt-4">
                                <li>
                                    <p>Pregunta #4</p>
                                </li>
                                <input type="radio" name="pregunta_4" value="1" id="respuesta_1_4" <?php if($pregunta_4 == '1') echo 'checked'; ?>><label for="respuesta_1_4" class="cursor mx-3"> Respuesta 1</label><br>
                                <input type="radio" name="pregunta_4" value="2" id="respuesta_2_4" <?php if($pregunta_4 == '2') echo 'checked'; ?>><label for="respuesta_2_4" class="cursor mx-3"> Respuesta 2</label><br>
                                <input type="radio" name="pregunta_4" value="3" id="respuesta_3_4" <?php if($pregunta_4 == '3') echo 'checked'; ?>><label for="respuesta_3_4" class="cursor mx-3"> Respuesta 3</label><br>
                                <input type="radio" name="pregunta_4" value="4" id="respuesta_4_4" <?php if($pregunta_4 == '4') echo 'checked'; ?>><label for="respuesta_4_4" class="cursor mx-3"> Respuesta 4</label>
                            </div>
                            <div class="mt-4">
                                <li>
                                    <p>Pregunta #5</p>
                                </li>
                                <input type="radio" name="pregunta_5" value="1" id="respuesta_1_5" <?php if($pregunta_5 == '1') echo 'checked'; ?>><label for="respuesta_1_5" class="cursor mx-3"> Respuesta 1</label><br>
                                <input type="radio" name="pregunta_5" value="2" id="respuesta_2_5" <?php if($pregunta_5 == '2') echo 'checked'; ?>><label for="respuesta_2_5" class="cursor mx-3"> Respuesta 2</label><br>
                                <input type="radio" name="pregunta_5" value="3" id="respuesta_3_5" <?php if($pregunta_5 == '3') echo 'checked'; ?>><label for="respuesta_3_5" class="cursor mx-3"> Respuesta 3</label><br>
                                <input type="radio" name="pregunta_5" value="4" id="respuesta_4_5" <?php if($pregunta_5 == '4') echo 'checked'; ?>><label for="respuesta_4_5" class="cursor mx-3"> Respuesta 4</label>
                            </div>
                            <div class="mt-4">
                                <li>
                                    <p>Pregunta #6</p>
                                </li>
                                <input type="radio" name="pregunta_6" value="1" id="respuesta_1_6" <?php if($pregunta_6 == '1') echo 'checked'; ?>><label for="respuesta_1_6" class="cursor mx-3"> Respuesta 1</label><br>
                                <input type="radio" name="pregunta_6" value="2" id="respuesta_2_6" <?php if($pregunta_6 == '2') echo 'checked'; ?>><label for="respuesta_2_6" class="cursor mx-3"> Respuesta 2</label><br>
                                <input type="radio" name="pregunta_6" value="3" id="respuesta_3_6" <?php if($pregunta_6 == '3') echo 'checked'; ?>><label for="respuesta_3_6" class="cursor mx-3"> Respuesta 3</label><br>
                                <input type="radio" name="pregunta_6" value="4" id="respuesta_4_6" <?php if($pregunta_6 == '4') echo 'checked'; ?>><label for="respuesta_4_6" class="cursor mx-3"> Respuesta 4</label>
                            </div>
                            <div class="mt-4">
                                <li>
                                    <p>Pregunta #7</p>
                                </li>
                                <input type="radio" name="pregunta_7" value="1" id="respuesta_1_7" <?php if($pregunta_7 == '1') echo 'checked'; ?>><label for="respuesta_1_7" class="cursor mx-3"> Respuesta 1</label><br>
                                <input type="radio" name="pregunta_7" value="2" id="respuesta_2_7" <?php if($pregunta_7 == '2') echo 'checked'; ?>><label for="respuesta_2_7" class="cursor mx-3"> Respuesta 2</label><br>
                                <input type="radio" name="pregunta_7" value="3" id="respuesta_3_7" <?php if($pregunta_7 == '3') echo 'checked'; ?>><label for="respuesta_3_7" class="cursor mx-3"> Respuesta 3</label><br>
                                <input type="radio" name="pregunta_7" value="4" id="respuesta_4_7" <?php if($pregunta_7 == '4') echo 'checked'; ?>><label for="respuesta_4_7" class="cursor mx-3"> Respuesta 4</label>
                            </div>
                            <div class="mt-4">
                                <li>
                                    <p>Pregunta #8</p>
                                </li>
                                <input type="radio" name="pregunta_8" value="1" id="respuesta_1_8" <?php if($pregunta_8 == '1') echo 'checked'; ?>><label for="respuesta_1_8" class="cursor mx-3"> Respuesta 1</label><br>
                                <input type="radio" name="pregunta_8" value="2" id="respuesta_2_8" <?php if($pregunta_8 == '2') echo 'checked'; ?>><label for="respuesta_2_8" class="cursor mx-3"> Respuesta 2</label><br>
                                <input type="radio" name="pregunta_8" value="3" id="respuesta_3_8" <?php if($pregunta_8 == '3') echo 'checked'; ?>><label for="respuesta_3_8" class="cursor mx-3"> Respuesta 3</label><br>
                                <input type="radio" name="pregunta_8" value="4" id="respuesta_4_8" <?php if($pregunta_8 == '4') echo 'checked'; ?>><label for="respuesta_4_8" class="cursor mx-3"> Respuesta 4</label>
                            </div>
                            <div class="mt-4">
                                <li>
                                    <p>Pregunta #9</p>
                                </li>
                                <input type="radio" name="pregunta_9" value="1" id="respuesta_1_9" <?php if($pregunta_9 == '1') echo 'checked'; ?>><label for="respuesta_1_9" class="cursor mx-3"> Respuesta 1</label><br>
                                <input type="radio" name="pregunta_9" value="2" id="respuesta_2_9" <?php if($pregunta_9 == '2') echo 'checked'; ?>><label for="respuesta_2_9" class="cursor mx-3"> Respuesta 2</label><br>
                                <input type="radio" name="pregunta_9" value="3" id="respuesta_3_9" <?php if($pregunta_9 == '3') echo 'checked'; ?>><label for="respuesta_3_9" class="cursor mx-3"> Respuesta 3</label><br>
                                <input type="radio" name="pregunta_9" value="4" id="respuesta_4_9" <?php if($pregunta_9 == '4') echo 'checked'; ?>><label for="respuesta_4_9" class="cursor mx-3"> Respuesta 4</label>
                            </div>
                            <div class="mt-4">
                                <li>
                                    <p>Pregunta #10</p>
                                </li>
                                <input type="radio" name="pregunta_10" value="1" id="respuesta_1_0" <?php if($pregunta_10 == '1') echo 'checked'; ?>><label for="respuesta_1_0" class="cursor mx-3"> Respuesta 1</label><br>
                                <input type="radio" name="pregunta_10" value="2" id="respuesta_2_0" <?php if($pregunta_10 == '2') echo 'checked'; ?>><label for="respuesta_2_0" class="cursor mx-3"> Respuesta 2</label><br>
                                <input type="radio" name="pregunta_10" value="3" id="respuesta_3_0" <?php if($pregunta_10 == '3') echo 'checked'; ?>><label for="respuesta_3_0" class="cursor mx-3"> Respuesta 3</label><br>
                                <input type="radio" name="pregunta_10" value="4" id="respuesta_4_0" <?php if($pregunta_10 == '4') echo 'checked'; ?>><label for="respuesta_4_0" class="cursor mx-3"> Respuesta 4</label>
                            </div>
                        </ol>
                        <div class="col-12 col-md-5 col-lg-5 col-xl-5 text-center m-auto">
                            <button class="btn btn-primary btn-lg text-white" name="tipo" value="pruebaFinal" type="submit">Validar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>


    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../extensions/choices.js/choices.js"></script>
    <script src="../js/function.js"></script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <!-- <script src="js/scripts.js"></script> -->
    <?php if ($porcentaje>=50) {?>
    <script>
        setearContentValidar();
    </script>
    <?php } ?>
</body>
</html>


<?php
    }else{
        header("location:../../index.php");
    }
?>