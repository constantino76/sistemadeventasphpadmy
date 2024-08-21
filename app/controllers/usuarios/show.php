


<?php    $id= $_GET["id"];  

$Sql_usuario= "SELECT us.id_usuario as id_usuario, us.nombres as nombres ,us.email as email, rol.rol as rol FROM tb_usuarios as us INNER JOIN   tb_roles as rol    ON us.id_rol =rol.id_rol where us.id_usuario=$id" ;
$query_usuarios=$pdo->prepare($Sql_usuario);
$query_usuarios->execute();
$usuario=$query_usuarios->fetchAll(PDO::FETCH_ASSOC);

foreach($usuario as $userdata){

$nombre=$userdata['nombres'];
$email=$userdata['email'];
 $rol=$userdata['rol'];
}
?>