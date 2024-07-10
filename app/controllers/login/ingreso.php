<?php


include('../../config.php');
// recordar usar el mname en los campos del formulario para capturar los valores 
$contador = 0;
$email=$_POST['email'];
$password_user=$_POST['user_password'];
$password_user=trim($password_user);

$sql= "SELECT * FROM tb_usuarios WHERE email='$email' AND password_user='$password_user'";
$query =$pdo->prepare($sql);

$query->execute();

$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
foreach ($usuarios as $usuario){
    $contador = $contador + 1;
    $email_tabla = $usuario['email'];
    $nombres = $usuario['nombres'];
    
    $password_user_tabla = $usuario['password_user'];
    echo"dentro del for".$contador;
}
  $password_user_tabla=trim($password_user_tabla);
  echo"<br>";
  
if( ($contador> 0) &&($password_user==$password_user_tabla)  ){
   
   echo$contador;
    echo "Datos correctos";
    session_start();
 $_SESSION['sesion_email'] = $email;
     header('Location: '.$URL.'/index.php');
}else{
    echo "Datos incorrectos, vuelva a intentarlo".$contador;
 session_start();
    $_SESSION['mensaje'] = "Error datos incorrectos";
     header('Location: '.$URL.'/login');
}
 

