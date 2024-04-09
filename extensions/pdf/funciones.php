<?php


// Fecha
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
            $dia=date('d');
            $fechaCF=date($dia,strtotime($fecha))." de ". $mes[date('n',strtotime($fecha))] . " de " . date('Y',strtotime($fecha));

            return $fechaCF;
        }
    }

// fin Fecha

// Fecha
    function fechaVence($fecha){
            
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

        $dia = date('d')-1;
        $year = date('Y')+1;
        $fechaCF = date($dia,strtotime($fecha))." de ". $mes[date('n',strtotime($fecha))] . " de " . date($year,strtotime($fecha));

        return $fechaCF;
    }

// fin Fecha

// Fecha
    function obtenerMes($fecha){
            
        date_default_timezone_set('America/Bogota');

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

        $mes[date('n',strtotime($fecha))];

        return $mes;
    }

// fin Fecha

// consultar nombre del estudiante segun el dni

    function consultarNombreEstudiante($dni){ 
        
        include '../../php/conexion-bd.php';
        
        $consultarNombreEstudiante= mysqli_query($conexion,"SELECT * FROM usuarios WHERE usu_dni = $dni ");
        $mostrarNombre = mysqli_fetch_array($consultarNombreEstudiante);

        return strtoupper($mostrarNombre['usu_nombre']);


    }

// fin consultar nombre del estudiante segun el dni

// consultar nombre del Proveedor dependiendo del id

    function consultarCiudadDni($dni){ 
        
        include '../../php/conexion-bd.php';
        
        $consultarCiudadDni= mysqli_query($conexion,"SELECT * FROM usuarios WHERE usu_dni = $dni ");
        $mostrarCiudad = mysqli_fetch_array($consultarCiudadDni);

        return $mostrarCiudad['usu_ciudad_dep'];


    }

// fin consultar nombre del Proveedor dependiendo del id

// consultar nombre del estudiante segun el dni

    function consultarConsecutivo($tipo){ 
        
        include '../../php/conexion-bd.php';
        
        $consultarConsecutivo= mysqli_query($conexion,"SELECT * FROM consecutivos WHERE cons_name = '$tipo' ");
        $mostrarConsecutivo = mysqli_fetch_array($consultarConsecutivo);

        return $mostrarConsecutivo['cons_numero'];


    }

// fin consultar nombre del estudiante segun el dni

// consultar nombre de la Referencia de Proveedor dependiendo del id

function consultarNombreRefProveedor($id){ 
        
    include '../../php/conexion-bd.php';
    
    $consultarNombreRefProveedor= mysqli_query($conexion,"SELECT * FROM proveedoresreferencias WHERE id = $id ");
    $mostrarNombreRefProveedor = mysqli_fetch_array($consultarNombreRefProveedor);

    return $mostrarNombreRefProveedor['referencia'];

}

// fin consultar nombre de la Referencia de Proveedor dependiendo del id

// consultar nombre del departamento dependiendo del id de departamento

    function consultarNombreDepart($id_depart){

        include '../../php/conexion-bd.php';
        
        $consultarNombreDepart= mysqli_query($conexion,"SELECT * FROM departamentos WHERE id_departamento = $id_depart");
        $mostrarNombreDepart = mysqli_fetch_array($consultarNombreDepart);

        return utf8_encode($mostrarNombreDepart['departamento']);

    }
// fin consultar nombre del departamento dependiendo del id de departamento

// consultar nombre del municipio dependiendo del id de municipio

    function consultarNombreMuni($id_muni){
        
        include '../../php/conexion-bd.php';

        
        $consultarNombreMuni= mysqli_query($conexion,"SELECT * FROM municipios WHERE id_municipio = $id_muni");
        $mostrarNombreMuni = mysqli_fetch_array($consultarNombreMuni);

        return utf8_encode($mostrarNombreMuni['municipio']);

    }
// fin consultar nombre del municipio dependiendo del id de municipio

// dar formato a un precio

    function formatoAPrecio($precio){
                
        $precioCF=number_format($precio,0,",",".");

        return '$ '.$precioCF;
    }
// fin dar formato a un precio

// mostrar numero OC
    function numeroOC($numero){
        
        if ($numero>0 && $numero < 10) {
            return '0'.$numero;
        }else {
            return $numero;
        }
    }
// fin mostrar numero OC

// calcular total
    function calcularTotal($subtotal,$iva,$descuento,$otros_conceptos,$tipo_concepto){
        if ($tipo_concepto == 1) {
            $total = $subtotal + $iva - $descuento + $otros_conceptos;
            return $total;
        }else {
            $total = $subtotal + $iva - $descuento - $otros_conceptos;
            return $total;
        }
    }
// fin calcular total

// calcular iva
    function calcularIVA($subtotal,$iva){
        $iva = ($iva * $subtotal)/ 100;
        return $iva;
    }
// fin calcular iva

?>