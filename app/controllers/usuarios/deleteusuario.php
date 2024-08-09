<?php 

include("../../config.php");
$id_usuario = $_POST['id'];

echo"delete";
$sqlsentencia="DELETE FROM tb_usuarios WHERE id_usuario =$id_usuario";
$query_usuarios=$pdo->prepare($sqlsentencia);
$query_usuarios->execute();


session_start();
$_SESSION["mensaje"]="Usuario Eliminado";
$_SESSION['icono']="success";
header('Location: '.$URL.'/usuarios');
?>