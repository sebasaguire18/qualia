<?php


function generarCertificacion($dni){
    include 'conexion-bd.php';

    // $id = uniqid();
    $today = date("Y-m-d H:i:s"); 

    $generarCertificado = mysqli_query($conexion,"UPDATE usuarios SET usu_certificado = 1, usu_cert_fecha = '$today' WHERE usu_dni = $dni ");
    
    if ($generarCertificado) {
        $seleccionarConsCert = mysqli_query($conexion,"SELECT * FROM consecutivos WHERE cons_name = 'certificado' ");
        $mostrarConsCert = mysqli_fetch_array($seleccionarConsCert);
        $numeroConsNuevoCert = $mostrarConsCert['cons_numero']+1;

        $actualizarConsCert = mysqli_query($conexion,"UPDATE consecutivos SET cons_numero = $numeroConsNuevoCert WHERE cons_name = 'certificado' ");

        if ($actualizarConsCert) {
            $seleccionarConsCarnet = mysqli_query($conexion,"SELECT * FROM consecutivos WHERE  cons_name = 'carnet' ");
            $mostrarConsCarnet = mysqli_fetch_array($seleccionarConsCarnet);
            $numeroConsNuevoCarnet = $mostrarConsCarnet['cons_numero']+1;

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

function registrarUsuario($nameUsuario,$dniUsuario,$ciudadUsuario,$emailUsuario,$passUsuario){
    include 'conexion-bd.php';

    // $id = uniqid();
    $today = date("Y-m-d H:i:s"); 

   
    $verificarEmailExist = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usu_correo = '$emailUsuario'");
    $verificarEE = mysqli_num_rows($verificarEmailExist);

    if ($verificarEE == 0) {
 
        $verificarDniExist = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usu_dni = '$dniUsuario'");
        $verificarDniE = mysqli_num_rows($verificarDniExist);
    
        if ($verificarDniE == 0) {
    
            $nuevoUsuario = mysqli_query($conexion,"INSERT INTO usuarios (usu_dni,usu_ciudad_dep,usu_nombre,usu_correo,usu_pass,usu_rol) 
                                        VALUES($dniUsuario,'$ciudadUsuario','$nameUsuario','$emailUsuario','$passUsuario','64645990cbqw1')");
            
            if ($nuevoUsuario) {
                return true;
            }else {
                return false;
            }
        }else{
            return 'dniExist';
        }
    
    }else{
        return 'emailExist';
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