<?php
 session_start();

 if($_SESSION['userID']){
    
    $usu_id = $_SESSION['userID'];
    include '../php/conexion-bd.php';

    $tipo = $_POST['tipo'];                       

    if ($tipo == 'optionsCedulas') {
        $seleccionarUsuarios = mysqli_query($conexion," SELECT * FROM usuarios WHERE usu_status = 1 AND usu_prueba > 50 AND usu_certificado = 0");

        while ($usuario = mysqli_fetch_array($seleccionarUsuarios)) {
            ?>
            <option value="<?php echo $usuario['usu_dni'] ?>"><?php echo $usuario['usu_nombre'].' - '.$usuario['usu_dni'] ?></option>
            <?php
        } 
    }
}
?>