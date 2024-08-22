
<?php    $id= $_GET["id"];  

$Sql_categoria= "SELECT us.nombre_categoria as nombre_categoria FROM tb_categorias as us  where us.id_categoria=$id" ;
$query_categoria=$pdo->prepare($Sql_categoria);
$query_categoria->execute();
$categoria=$query_categoria->fetchAll(PDO::FETCH_ASSOC);

foreach($categoria as $categoria_data){

$nombre=$categoria_data['nombre_categoria'];

}
?>