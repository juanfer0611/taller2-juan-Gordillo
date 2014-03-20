<?php include "includes/header.php" ?>
<?php


$conexion =mysqli_connect("localhost","tienda","tienda","databaseTiendaOnline");
mysqli_set_charset($conexion, "utf8");
$query = "SELECT * FROM productos WHERE id=".$_GET['id']." LIMIT 1";
$resultado = mysqli_query($conexion, $query);
while ($fila = mysqli_fetch_array($resultado)) {
    echo "<article>";
    echo "<img src='".$fila['imagen']."'width=40%>";
    echo "<h3>".$fila['nombre']."<h3/>";
    echo "<p>".$fila['descripcion']."<p/>";
    echo "<p>Precio: $".$fila['precio']."<p/>";

    echo "<br>";
    echo "<a href='index.php'><button>Volver al home</button></a>";
    echo "<button class= 'botoncompra' value='".$fila['id']."''>Añadir al carrito</button>";
    echo "</article>";
}
mysqli_close($conexion);
?>

<?php include "includes/footer.php" ?>