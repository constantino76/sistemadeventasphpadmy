<?php   



$id_get= $_GET["id"];  
$Sql_usuario= "SELECT *FROM tb_usuarios    where id_usuario=$id_get" ;
$query_usuarios=$pdo->prepare($Sql_usuario);
$query_usuarios->execute();
$usuario=$query_usuarios->fetchAll(PDO::FETCH_ASSOC);

foreach($usuario as $userdata){

$nombres=$userdata['nombres'];
$email=$userdata['email'];

}
?>