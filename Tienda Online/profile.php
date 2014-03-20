<?php require_once('includes/database.php');
session_start();
if(!isset($_SESSION['contador'])){$_SESSION['contador']=0;
}



?>


<?php include "includes/header.php" ?>
<p class="tituloProfile">Celulares comprados por Thimael</p>
<?php


$query= "SELECT productos.id, productos.imagen,productos.nombre,productos.descripcion,productos.precio,pedido.fechaPedido FROM productos LEFT JOIN lineapedido ON lineapedido.idProducto=productos.id LEFT JOIN pedido ON pedido.id= lineapedido.idPedido LEFT JOIN cliente ON cliente.id=pedido.idCliente WHERE cliente.id=2 ORDER BY pedido.fechaPedido ASC ";

                $resultado = mysql_query($query) OR die("<p class='error'>Error de query: ".mysql_error()."</p></p>");

                while ( $row = mysql_fetch_array($resultado)){
                    echo "<article id='".$row["id"]."'>";
                    echo "<div class= 'imagen'>";
                    echo "<img class='imgPost' src='img/".$row["imagen"]."'/>";
                    echo "</div>";
                    echo "<div class= 'informacion'>";
                    echo "<h2 class='nombreProducto'>".$row["nombre"]."</h2>";
                    echo "<p class='infoProducto'>".$row["descripcion"]."</p>";
                    echo "<p class='precioProducto'>Precio: $".$row["precio"]."</p>";
                    echo "<p class='precioProducto'>Comprado el día: ".date("M/d/Y | H:i:s A",$row["fechaPedido"])."</p>";
                    echo "</article>";
                }


