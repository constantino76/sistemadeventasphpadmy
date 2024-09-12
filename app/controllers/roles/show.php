<?php


$id= $_GET["id"];

$sql_rol = "SELECT id_rol, rol 
                  FROM tb_roles   where id_rol=$id";
$query_rol = $pdo->prepare($sql_rol);
$query_rol->execute();
$lisroles = $query_rol->fetchAll(PDO::FETCH_ASSOC);


foreach($lisroles as $roldata ){
  
$rol=$roldata["rol"];


}