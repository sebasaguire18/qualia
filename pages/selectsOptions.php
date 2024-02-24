<?php
 session_start();

 if($_SESSION['usu_id']){
    
    $usu_id = $_SESSION['usu_id'];
    include '../php/conexion-bd.php';

    $tipo = $_POST['tipo'];                       

    if ($tipo == 'optionsCedulas') {
        $seleccionarUsuarios = mysqli_query($conexion," SELECT * FROM usuarios WHERE usu_status = 1");

        while ($usuario = mysqli_fetch_array($seleccionarUsuarios)) {
            ?>
            <option value="<?php echo $usuario['usu_id'] ?>"><?php echo $usuario['usu_nombre'].' - '.$usuario['usu_dni'] ?></option>
            <?php
        } 
    }
}
?>