<?php


include('../../config.php');
// recordar usar el mname en los campos del formulario para capturar los valores 

$email=$_POST['email'];
$user_password=$_POST['user_password'];


$sql= "SELECT * FROM tb_usuarios WHERE email='$email' AND password_user='$user_password'";
$query =$pdo->prepare($sql);
echo"hola";
$query->execute();
$contador = 0;
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
foreach ($usuarios as $usuario){
    $contador = $contador + 1;
    $email_tabla = $usuario['email'];
    $nombres = $usuario['nombres'];
    echo$email_tabla;
    $password_user_tabla = $usuario['password_user'];
}

?>
