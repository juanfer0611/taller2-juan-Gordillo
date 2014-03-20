
<?php include "includes/header.php" ?>
<?php 




session_start();

$contador =0;

$conexion =mysqli_connect("localhost","tienda","tienda","databaseTiendaOnline");
mysqli_set_charset($conexion, "utf8");
$query = "SELECT * FROM cliente WHERE user='".$_POST['user']."'AND password ='".$_POST['password']."'";
$resultado = mysqli_query($conexion, $query);
while ($fila = mysqli_fetch_array($resultado)) {
    $contador++;
    $_SESSION['usuario']=$fila['id'];
}

if($contador>0){

    $query = "INSERT INTO pedido VALUES (NULL,".$_SESSION['usuario'].",'".date('U')."')";
    $resultado = mysqli_query($conexion, $query)OR die("<p class='error'>Error de query: ".mysql_error()."</p></p>");

    $query = "SELECT * FROM pedido WHERE idCliente='".$_SESSION['usuario']."'";
    $resultado = mysqli_query($conexion, $query)OR die("<p class='error'>Error de query: ".mysql_error()."</p></p>");


     while ($fila = mysqli_fetch_array($resultado)){
        $_SESSION ['idpedido']=$fila['id'];
          }
          echo $_SESSION['idpedido'];

          for($i=0;$i< $_SESSION['contador'];$i++){
            
            $query="INSERT INTO lineaPedido VALUES (NULL,'".$_SESSION['idpedido']."','".$_SESSION['producto'][$i]."','1')";
            $resultado = mysqli_query($conexion, $query) OR die("<p class='error'>Error de query: ".mysql_error()."</p></p>");
     
    }


   echo "<p>Tu pedido se ha realizado satisfactoriamente. Redirigiendo al home en 3 segundos...</p>";
    
    session_destroy();
    echo'
        <meta http-equiv="refresh" content="3; url= index.php">

    ';

} else{
     echo "<p>El usuario no existe, Redirigiendo a la confirmación en 3 segundos...</p>";

    echo'  
        <meta http-equiv="refresh" content="3; url= confirmar.php">
    ';
    

} else{
     echo "El usuario no existe";
}
mysqli_close($conexion);
?>









