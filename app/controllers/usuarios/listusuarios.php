<?php



$Sql_usuarios= "SELECT *FROM tb_usuarios";
$query_usuarios=$pdo->prepare($Sql_usuarios);
$query_usuarios->execute();
$listado_usuarios=$query_usuarios->fetchAll(PDO::FETCH_ASSOC);

?>