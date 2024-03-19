<?php
    session_start();
    error_reporting(0);
    if($_SESSION['userID']){
        $usu_id=$_SESSION['userID'];
        $usuRol = $_SESSION['userROL'];

        if ($usuRol == '64645990cb1d4') {
            header("location: welcome.php");
        }

?>
<!doctype html>
<html lang="es">
<head>
    <title id="titlePageCurso">Inicio</title>
    <?php include 'includes/linkq.php'; ?>

</head>
<body class="d-flex flex-column h-100">
        
    <!-- <div class="wrapper fadeInDown">
        <div id="formContent">
        <div class="fadeIn first">
            <span class="fa fa-user user_icon"></span>
        </div>
        <form action="php/iniciosesion.php" class="formLogin" method="POST">
            <input type="text" id="login" class="fadeIn second" name="correo" placeholder="Usuario">
            <input type="password" id="password" class="fadeIn third" name="pass" placeholder="Contraseña">
            <input type="submit" name="btn_iniciar" class="fadeIn fourth" value="Iniciar Sesión">
        </form>
        <div id="formFooter">
            <a class="underlineHover" href="#">¿Perdiste la contraseña?</a>
        </div>
        </div>
    </div> -->

    <!-- Page Content  -->
    <main class="flex-shrink-0">
        
        <?php include 'includes/nav.php'; ?>

        <div id="contentIndexCurso" class="">
            <div class="row text-center">
                <div class="col-12">
                    <img src="images/carga.gif" width="15%" class="">
                </div>
            </div>
        </div>
    </main>


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="extensions/choices.js/choices.js"></script>
    <script src="js/function.js"></script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <!-- <script src="js/scripts.js"></script> -->
    <script>
        contenido('inicio',2);
    </script>
</body>
</html>


<?php
    }else{
        header("location:index.php");
    }
?>