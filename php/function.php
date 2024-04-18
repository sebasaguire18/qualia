<?php 

// dar formato a una fecha

function formatoAFecha($fecha,$hora=false){
        
    date_default_timezone_set('America/Bogota');

    if ($hora) {
        $mes = array("","Enero",
                  "Febrero",
                  "Marzo",
                  "Abril",
                  "Mayo",
                  "Junio",
                  "Julio",
                  "Agosto",
                  "Septiembre",
                  "Octubre",
                  "Noviembre",
                  "Diciembre");

        $fechaCF=date('d',strtotime($fecha)) . " de " . $mes[date('n',strtotime($fecha))] . " de " . date('Y',strtotime($fecha)) . " a las " . date('g:i a',strtotime($fecha));

        return $fechaCF;
        
    }else {
        $mes = array("","Enero",
                      "Febrero",
                      "Marzo",
                      "Abril",
                      "Mayo",
                      "Junio",
                      "Julio",
                      "Agosto",
                      "Septiembre",
                      "Octubre",
                      "Noviembre",
                      "Diciembre");

        $fechaCF=date('d',strtotime($fecha))." de ". $mes[date('n',strtotime($fecha))] . " de " . date('Y',strtotime($fecha));

        return $fechaCF;
    }
}

// select del listado de usuarios para generar certificados (estado a consultar,uso del select)

function selectUsuarios($status,$uso){
    include 'conexion-bd.php';

    if ($status == 2) {
        $seleccionarUsuarios = mysqli_query($conexion," SELECT * FROM usuarios");
    }else {
        $seleccionarUsuarios = mysqli_query($conexion," SELECT * FROM usuarios WHERE usu_status = $status ");
    }
    ?>
        <select id="selectUsuario<?php echo $uso; ?>" class="form-control">
            <option value="0" selected>...</option>
    <?php
        while ($usuario = mysqli_fetch_array($seleccionarUsuarios)) {
    ?>
            <option value="<?php echo $usuario['usu_id'] ?>"><?php echo $usuario['usu_nombre'].' - '.$usuario['usu_dni'] ?></option>
    <?php 
        }
    ?>
        </select>
    <?php
}

// select del listado de usuarios para generar certificados (estado a consultar,uso del select)

function selectCertificados($status,$uso){
    include 'conexion-bd.php';

    if ($status == 2) {
        $seleccionarCertificados = mysqli_query($conexion," SELECT * FROM certificados");
    }else {
        $seleccionarCertificados = mysqli_query($conexion," SELECT * FROM certificados WHERE cert_status = $status ORDER BY cert_tipo ASC");
    }
    ?>
        <select id="selectCertificado<?php echo $uso; ?>" class="form-control">
            <option value="0" selected>...</option>
    <?php
        while ($Certificados = mysqli_fetch_array($seleccionarCertificados)) {
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
            <option value="<?php echo $Certificados['cert_id'] ?>"><?php echo $Certificados['cert_nombre'].' - '.'Tipo '.$tipoCert ?></option>
    <?php 
        }
    ?>
        </select>
    <?php
}

// consultar si el usuario tiene o no generado el curso segun id user

function perfil($user_id,$campo) {
    include 'conexion-bd.php';

    $seleccionarUsuario = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usu_id = $user_id AND $campo = $campo");
    $usuario = mysqli_fetch_array($seleccionarUsuario);

    return $usuario[$campo];
    
}

// consultar si el usuario tiene o no generado el curso segun id user

function validarCertificado($user_dni) {
    include 'conexion-bd.php';

    $seleccionarCertificado = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usu_dni = $user_dni");
    $certificado = mysqli_fetch_array($seleccionarCertificado);

    return $certificado['usu_certificado'];
    
}
   
// ----------  Funcion generar codigos aleatorios  ----------

function generarCodigoAleatorio($longitud){
    $codigo="";
    $caracter="Letra";
    for($i=1; $i<=$longitud; $i++){
        if($caracter=="Letra"){
            $letra_aleatoria=chr(rand(ord("a"),ord("z")));
            $letra_aleatoria=strtoupper($letra_aleatoria);
            $codigo.=$letra_aleatoria;
            $caracter="Numero";
        }else{
            $numero_aleatorio=rand(0,9);
            $codigo.=$numero_aleatorio;
            $caracter="Letra";
        }
    }
    return $codigo;
}

?>