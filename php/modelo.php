<?php
session_start();

if($_SESSION['usu_id']){
    $usu_id = $_SESSION['usu_id'];

    function nuevoCertificado($inputNombreCertificado,$inputIntHoraria,$inputTipoCertificado,$usu_id){
        include 'conexion-bd.php';

        $id = uniqid();

        $insertarNuevoCertificado = mysqli_query($conexion,"INSERT INTO certificados (cert_id,cert_nombre,cert_int_horaria,cert_tipo,cert_user) 
                                    VALUES('$id','$inputNombreCertificado',$inputIntHoraria,'$inputTipoCertificado','$usu_id')");
        
        if ($insertarNuevoCertificado) {
            return true;
        }else {
            return false;
        }

    }

    function nuevaFirma($inputNombreFirma,$destino){
        include 'conexion-bd.php';

        $id = uniqid();

        $insertarNuevaFirma = mysqli_query($conexion,"INSERT INTO firmas (firma_id,firma_nombre,firma_img,firma_user) 
                                    VALUES('$id','$inputNombreFirma','$destino','$usu_id')");
        
        if ($insertarNuevaFirma) {
            return true;
        }else {
            return false;
        }

    }
}else {
    header("location: index.php");
}
    
    
?>