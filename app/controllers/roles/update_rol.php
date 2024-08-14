<!-- <?php
include('../../config.php');


$id_get= $_GET["id"];  
$Sql_rol= "SELECT *FROM tb_roles    where id_rol=$id_get" ;
$query_rol=$pdo->prepare($Sql_rol);
$query_rol->execute();
$update_rol=$query_rol->fetchAll(PDO::FETCH_ASSOC);

foreach($update_rol as $rol){
   
$rol=$rol['rol'];


}

?> -->