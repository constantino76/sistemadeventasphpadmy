<?php

$Sql_roles= "SELECT *FROM tb_roles";
$query_roles=$pdo->prepare($Sql_roles);
$query_roles->execute();
$listado_roles=$query_roles->fetchAll(PDO::FETCH_ASSOC);

?>