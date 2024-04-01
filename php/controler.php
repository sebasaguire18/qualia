<?php


error_reporting(0);
include 'modelo.php';


$tipo = $_POST['tipo'];

if ($tipo == 'generarCertificacion') {
    
    $dni = $_POST['dni'];
    
    if ( $dni == "")  {
        $html = 'info';
        echo $html;
    }else {
        $generarCertificacion=generarCertificacion($dni);

        if ($generarCertificacion === true) {
            $html = 'success';
            echo $html;
        }else {
            $html = 'error';
            echo $html;
        }
    }

}

if ($tipo == 'guardarDatosPerfil') {
    
    $perfilNombre = $_POST['perfilNombre'];
    $perfilDni = $_POST['perfilDni'];
    $perfilCiudad = $_POST['perfilCiudad'];
    
    if ( $perfilNombre == "" || $perfilDni == "" || $perfilCiudad == "")  {
        $html = 'info';
        echo $html;
    }else {
        $guardarDatosPerfil = guardarDatosPerfil($perfilNombre,$perfilDni,$perfilCiudad);

        if ($guardarDatosPerfil === true) {
            $html = 'success';
            echo $html;
        }else {
            $html = 'error';
            echo $html;
        }
    }

}

if ($tipo == 'registrarUsuario') {
    
    $nameUsuario = $_POST['nameUsuario'];
    $dniUsuario = $_POST['dniUsuario'];
    $ciudadUsuario = $_POST['ciudadUsuario'];
    $emailUsuario = $_POST['emailUsuario'];
    $passUsuario = $_POST['passUsuario'];
    
    if ( $nameUsuario == "" || $dniUsuario == "" || $ciudadUsuario == "" || $emailUsuario == "" || $passUsuario == "" )  {
        $html = 'info';
        echo $html;
    }else {
        $registrarUsuario = registrarUsuario($nameUsuario,$dniUsuario,$ciudadUsuario,$emailUsuario,$passUsuario);

        if ($registrarUsuario === true) {
            $html = 'success';
            echo $html;
        }else if($registrarUsuario == 'emailExist'){
            $html = 'emailExist';
            echo $html;
        }else if($registrarUsuario == 'dniExist'){
            $html = 'dniExist';
            echo $html;
        }else {
            $html = 'error';
            echo $html;
        }
    }

}

if ($tipo == 'nuevoCertificado') {
    
    $inputNombreCertificado = $_POST['inputNombreCertificado'];
    $inputIntHoraria = $_POST['inputIntHoraria'];
    $inputTipoCertificado = $_POST['inputTipoCertificado'];
    
    if ( $inputNombreCertificado == "" || $inputIntHoraria == "" || $inputTipoCertificado == "" )  {
        $html = '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                    <h5 class="alert-heading">¡¡ Algo salió mal, todos los campos deben contener información !! </h5>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>';

        echo $html;
    }else {
        $nuevoCertificado=nuevoCertificado($inputNombreCertificado,$inputIntHoraria,$inputTipoCertificado,$usu_id);

        if ($nuevoCertificado === true) {
            $html = '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                        <h5 class="alert-heading">¡¡ Nuevo Certificado registrado !! </h5>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
            echo $html;
        }else {
            $html = '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                        <h5 class="alert-heading">¡¡ Algo salió mal, el Nuevo Certificado no pudo ser registrado !! </h5>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
            echo $html;
        }
    }

}

if ($tipo == 'nuevaFirma') {
    
    $inputNombreFirma = $_POST['inputNombreFirma'];
    
    $foto=$_FILES["customFile"]["name"];
    $ruta=$_FILES["customFile"]["tmp_name"];
    $destino="images/".uniqid()."-".$foto;
    
    if ( $inputNombreFirma == "")  {
        $html = '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                    <h5 class="alert-heading">¡¡ Algo salió mal, todos los campos deben contener información !! </h5>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>';

        echo $html;
    }else {
        $nuevaFirma=nuevaFirma($inputNombreFirma,$destino);

        if ($nuevaFirma === true) {
            // copy($ruta,$destino);
            move_uploaded_file($ruta,'../'.$destino);
            $html = '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                        <h5 class="alert-heading">¡¡ Nueva Firma registrada !! </h5>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
            echo $html;
        }else {
            $html = '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                        <h5 class="alert-heading">¡¡ Algo salió mal, la nueva Firma no pudo ser registrada !! </h5>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
            echo $html;
        }
    }

}

