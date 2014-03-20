<?php 

session_start();
$suma =0;
if(isset($_GET['p'])){
	$_SESSION['producto'][$_SESSION['contador']]=$_GET['p'];
	$_SESSION['contador']++;
}

$conexion =mysqli_connect("localhost","tienda","tienda","databaseTiendaOnline");
mysqli_set_charset($conexion, "utf8");

echo "<table>";
for($i=0;$i< $_SESSION['contador'];$i++){
	//echo "Producto: ".$_SESSION['producto'][$i]."<br>";
	$query = "SELECT * FROM productos WHERE id=".$_SESSION['producto'][$i]."";
	//$query = "SELECT * FROM productos WHERE id="."3";
	$resultado = mysqli_query($conexion, $query);
    while ( $fila = mysqli_fetch_array($resultado)){
    	echo "<tr><td> ".$fila['nombre']. "</td><td> $".$fila['precio']."</td></tr>";
    	$suma += $fila['precio'];
	}
}
echo "<tr><td>Total:</td><td> $".number_format($suma,2)."</td></tr>";
echo "</table>";

mysqli_close($conexion);
?>
