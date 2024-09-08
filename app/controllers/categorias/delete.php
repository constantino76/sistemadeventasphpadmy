<?php 

include("../../config.php");
$id_categoria = $_POST['id'];

echo"delete";
$sqlsentencia="DELETE FROM tb_categorias WHERE id_categoria =$id_categoria";
$query_categoria=$pdo->prepare($sqlsentencia);
$query_categoria->execute();


session_start();
$_SESSION["mensaje"]="Categoria Eliminada";
$_SESSION['icono']="success";
header('Location: '.$URL.'/categorias');
?>