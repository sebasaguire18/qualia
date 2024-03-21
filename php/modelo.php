<?php


function generarCertificacion($dni){
    include 'conexion-bd.php';

    // $id = uniqid();

    $generarCertificado = mysqli_query($conexion,"UPDATE usuarios SET usu_certificado = 1 WHERE usu_dni = $dni ");
    
    if ($generarCertificado) {
        $seleccionarConsCert = mysqli_query($conexion,"SELECT * FROM consecutivos WHERE cons_name = 'certificado' ");
        $mostrarConsCert = mysqli_fetch_array($seleccionarConsCert);
        $numeroConsNuevoCert = $mostrarConsCert['cons_numero'];

        $actualizarConsCert = mysqli_query($conexion,"UPDATE consecutivos SET cons_numero = $numeroConsNuevoCert WHERE cons_name = 'certificado' ");

        if ($actualizarConsCert) {
            $seleccionarConsCarnet = mysqli_query($conexion,"SELECT * FROM consecutivos WHERE  cons_name = 'carnet' ");
            $mostrarConsCarnet = mysqli_fetch_array($seleccionarConsCarnet);
            $numeroConsNuevoCarnet = $mostrarConsCarnet['cons_numero'];

            $actualizarConsCarnet = mysqli_query($conexion,"UPDATE consecutivos SET cons_numero = $numeroConsNuevoCarnet WHERE cons_name = 'carnet' ");

            if ($actualizarConsCarnet) {
                return true;
            }else {
                return false;
            }
        }else {
            return false;
        }
    }else {
        return false;
    }

}

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
    
?>