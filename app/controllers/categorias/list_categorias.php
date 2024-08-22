<?php

$Sql_categorias= "SELECT *FROM tb_categorias";
$query_categorias=$pdo->prepare($Sql_categorias);
$query_categorias->execute();
$listado_categorias=$query_categorias->fetchAll(PDO::FETCH_ASSOC);

?>