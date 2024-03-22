<?php
    require './vendor/autoload.php';

    use Spipu\Html2Pdf\Html2Pdf;

    // aqui poner la validación del isset
    if (isset($_GET)) {

        include '../../php/conexion-bd.php';


        $paramPDF = $_GET['paramPDF'];
        $dni = $_GET['dni'];

        $consultarUsuario = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usu_dni = $dni");
        $mostrarUsuario=mysqli_fetch_array($consultarUsuario);
        
        $today = $mostrarUsuario['usu_cert_fecha'];
        
        include 'funciones.php';

        $certificacion = $mostrarUsuario['usu_certificado'];

        // Validar si tiene certificacion 
        if ($certificacion == 1) {
            // recoger el contenido del html
            ob_start();
            require_once 'print_view.php';
            $html = ob_get_clean();
        }else {
            error_reporting(0);
            echo 'No se le ha generado la certificación al usuario registrado con CC: '. $dni;
        }

        
        $marges = array(7, 12, 7, 7);

        $html2pdf = new Html2pdf('p','A4','es','true','UTF-8',$marges);
        $html2pdf -> writeHTML($html);
        $html2pdf -> output('certificado_'.$dni.'.pdf');
        
    }else {
        header("location:javascript:history.go(-1);");
    }
?>