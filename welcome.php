<?php
    session_start();
    if($_SESSION['userID']){
        $usu_id=$_SESSION['userID'];
        $usuRol = $_SESSION['userROL'];

        if ($usuRol <> '64645990cb1d4') {
            header("location: curso.php");
        }
            
?>

<!doctype html>
<html lang="es">
<head>
    <title id="titlePageS">Inicio</title>
    <?php include 'includes/link.php'; ?>
</head>
<body>
        
    <div class="wrapper d-flex align-items-stretch">
            <div class="fixed-top w-100 d-flex justify-content-star pl-3 pt-2">
                
            </div>

            <?php include 'includes/navL.php'; ?>
            <?php include 'includes/navR.php'; ?>
            
                <!-- Page Content  -->
            <div id="contentPrincipal" class="row p-5 p-md-5 m-md-5 mb-5 container-fluid">
                
            </div>
    </div>
    <?php include 'includes/footer.php'; ?>
    
    <?php include 'includes/script.php'; ?>
    <script>
        contenido('inicio',1);
    </script>
</body>
</html>

<?php
    }else{
        header("location:index.php");
    }
?>