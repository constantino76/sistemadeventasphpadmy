<?php

define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWORD','');
define('BD','sistemadeventas');

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

try{
    $pdo = new PDO($servidor,USUARIO,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    //echo "La conexión a la base de datos fue con exito";
}catch (PDOException $e){
    //print_r($e);
    echo "Error al conectar a la base de datos";
}

$URL = "http://localhost/www.sistemadeventas.com";

date_default_timezone_set("America/Caracas");
$fechaHora = date('Y-m-d H:i:s');



if (isset($_SESSION['mensaje'])){
    $mensaje_=$_SESSION['mensaje'];
    $icono_=$_SESSION['icono'];
    $titulo=$_SESSION['titulo'];
?>
 <script>
// imprimimos el mensaje
Swal.fire({
 title: "<?php echo$titulo;?>",
 text: "<?php  echo$mensaje_;?> ",
icon: "<?php echo$icono_;  ?>" }
);
unset($_SESSION['mensaje']);
unset($_SESSION['icono']);
<?php  }  ?>
