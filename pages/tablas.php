<?php

include '../php/conexion-bd.php';

include '../php/function.php';

$tabla = $_POST['tabla'];

if ($tabla == 'tblLisCertificados') {

    $seleccionarCertificados = mysqli_query($conexion,"SELECT * FROM certificados WHERE cert_status <> 0 ORDER BY cert_id DESC");

?>
    <table class="table table-striped" id="tblLisCertifi">
        <thead class="bg-primary">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Intensidad horaria</th>
            <th scope="col">Tipo de Certificado</th>
            <th scope="col">Usuario Creador</th>
            <th scope="col">Fecha</th>
            <th scope="col">Estado</th>
            </tr>
        </thead>
        <tbody>
<?php
    while ($Certificados = mysqli_fetch_array($seleccionarCertificados)) {

        if ($Certificados['cert_status'] == 1) {
            $estadoUsu = 'Activo';
        }elseif ($Certificados['cert_status'] == 0) {
            $estadoUsu = 'Inactivo';
        }elseif ($Certificados['cert_status'] == 2) {
            $estadoUsu = 'Aprobado';
        }elseif ($Certificados['cert_status'] == 3) {
            $estadoUsu = 'Aprobado y Generado';
        }

        if ($Certificados['cert_tipo'] == 1) {
            $tipoCert = 'Corto';
        }elseif ($Certificados['cert_tipo'] == 2) {
            $tipoCert = 'Técnico';
        }elseif ($Certificados['cert_tipo'] == 3) {
            $tipoCert = 'Tecnológico';
        }elseif ($Certificados['cert_tipo'] == 4) {
            $tipoCert = 'Profesional';
        }
    
?>
            <tr>
                <td><?php echo $Certificados['cert_id']; ?></td>
                <td><?php echo $Certificados['cert_nombre']; ?></td>
                <td><?php echo $Certificados['cert_int_horaria'].' Horas'; ?></td>
                <td><?php echo $tipoCert; ?></td>
                <td><?php echo $Certificados['cert_user']; ?></td>
                <td><?php echo formatoAFecha($Certificados['cert_fecha'],1); ?></td>
                <td><?php echo $estadoUsu ; ?></td>
            </tr>
<?php   
    }
?>
        </tbody>
    </table>
<?php
}


if ($tabla == 'tblLisCertificadosCancel') {

    $seleccionarCertificados = mysqli_query($conexion,"SELECT * FROM certificados WHERE cert_status = 0 ORDER BY cert_id DESC");

?>
    <table class="table table-striped">
        <thead class="bg-primary">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Intensidad horaria</th>
            <th scope="col">Tipo de Certificado</th>
            <th scope="col">Usuario Creador</th>
            <th scope="col">Fecha</th>
            <th scope="col">Estado</th>
            </tr>
        </thead>
        <tbody>
<?php
    while ($Certificados = mysqli_fetch_array($seleccionarCertificados)) {

        if ($Certificados['cert_status'] == 1) {
            $estadoUsu = 'Activo';
        }elseif ($Certificados['cert_status'] == 0) {
            $estadoUsu = 'Inactivo';
        }elseif ($Certificados['cert_status'] == 2) {
            $estadoUsu = 'Aprobado';
        }elseif ($Certificados['cert_status'] == 3) {
            $estadoUsu = 'Aprobado y Generado';
        }

        if ($Certificados['cert_tipo'] == 1) {
            $tipoCert = 'Corto';
        }elseif ($Certificados['cert_tipo'] == 2) {
            $tipoCert = 'Técnico';
        }elseif ($Certificados['cert_tipo'] == 3) {
            $tipoCert = 'Tecnológico';
        }elseif ($Certificados['cert_tipo'] == 4) {
            $tipoCert = 'Profesional';
        }
    
?>
            <tr>
                <td><?php echo $Certificados['cert_id']; ?></td>
                <td><?php echo $Certificados['cert_nombre']; ?></td>
                <td><?php echo $Certificados['cert_int_horaria'].' Horas'; ?></td>
                <td><?php echo $tipoCert; ?></td>
                <td><?php echo $Certificados['cert_user']; ?></td>
                <td><?php echo formatoAFecha($Certificados['cert_fecha'],1); ?></td>
                <td><?php echo $estadoUsu ; ?></td>
            </tr>
<?php   
    }
?>
        </tbody>
    </table>
<?php
}

if ($tabla == 'tblLisUsuarios') {

    $seleccionarUsuarios = mysqli_query($conexion,"SELECT * FROM usuarios ORDER BY usu_id DESC");

?>
    <table class="table table-striped" id="tblLisUsu">
        <thead class="bg-primary">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">DNI</th>
            <th scope="col">Nombre</th>
            <th scope="col">Correo</th>
            <th scope="col">Fecha Creación</th>
            <th scope="col">Estado</th>
            </tr>
        </thead>
        <tbody>
<?php
    while ($usuario = mysqli_fetch_array($seleccionarUsuarios)) {

        if ($usuario['usu_status'] == 1) {
            $estadoUsu = 'Activo';
        }elseif ($usuario['usu_status'] == 0) {
            $estadoUsu = 'Inactivo';
        }
?>
        <tr>
            <td><?php echo $usuario['usu_id']; ?></td>
            <td><?php echo $usuario['usu_dni']; ?></td>
            <td><?php echo $usuario['usu_nombre']; ?></td>
            <td><?php echo $usuario['usu_correo']; ?></td>
            <td><?php echo formatoAFecha($usuario['usu_fecha'],1); ?></td>
            <td><?php echo $estadoUsu ; ?></td>
        </tr>
<?php   
    }
?>
        </tbody>
    </table>
<?php
}

if ($tabla == 'tblLisFirmas') {

    $seleccionarfirmas = mysqli_query($conexion,"SELECT * FROM firmas ORDER BY firma_id DESC");

?>
    <table class="table table-striped">
        <thead class="bg-primary">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Imagen</th>
            <th scope="col">Fecha Creación</th>
            <th scope="col">Estado</th>
            </tr>
        </thead>
        <tbody>
<?php
    while ($firma = mysqli_fetch_array($seleccionarfirmas)) {

        if ($firma['firma_status'] == 1) {
            $estadoFirma = 'Activo';
        }elseif ($firma['firma_status'] == 0) {
            $estadoFirma = 'Inactivo';
        }
?>
        <tr>
            <td><?php echo $firma['firma_id']; ?></td>
            <td><?php echo $firma['firma_nombre']; ?></td>
            <td><img src="<?php echo $firma['firma_img']; ?>" width="120px"></td>
            <td><?php echo formatoAFecha($firma['firma_fecha'],1); ?></td>
            <td><?php echo $estadoFirma ; ?></td>
        </tr>
<?php   
    }
?>
        </tbody>
    </table>
<?php
}

?>

