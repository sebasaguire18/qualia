<?php
    require './vendor/autoload.php';

    use Spipu\Html2Pdf\Html2Pdf;

    // aqui poner la validación del isset
    if (isset($_GET)) {

        include '../../php/conexion-bd.php';


        $paramPDF = $_GET['paramPDF'];
        $dni = $_GET['dni'];
        $today = date("Y-m-d H:i:s"); 

        // $consultarPedido = mysqli_query($conexion,"SELECT * FROM pedidos WHERE id = $id");
        // $mostrarPedido=mysqli_fetch_array($consultarPedido);

        // $consultarPedidoDetalle = mysqli_query($conexion,"SELECT * FROM pedidosdetalle WHERE id_pedido = $id AND status = 3 GROUP BY id_producto");
        
        include 'funciones.php';
        
        // $iva = calcularIVA($mostrarPedido['subtotal'],$mostrarPedido['iva']);


        // recoger el contenido del html
        ob_start();
        require_once 'print_view.php';
        $html = ob_get_clean();

        
        $marges = array(7, 12, 7, 7);

        $html2pdf = new Html2pdf('p','A4','es','true','UTF-8',$marges);
        $html2pdf -> writeHTML($html);
        $html2pdf -> output('certificado_'.$dni.'.pdf');
        
    }else {
        header("location:javascript:history.go(-1);");
    }
?>