<?php   



$id_categoria= $_GET["id"];  
$Sql_categoria= "SELECT *FROM tb_categorias    where id_categoria=$id_categoria" ;
$query_categoria=$pdo->prepare($Sql_categoria);
$query_categoria->execute();
$categoria=$query_categoria->fetchAll(PDO::FETCH_ASSOC);

foreach($categoria as $categoria_data){

$nombres=$categoria_data['nombre_categoria'];

}
?>