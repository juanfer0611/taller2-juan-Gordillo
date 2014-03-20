<?php include "includes/header.php" ?>
<p class="tituloProfile">Catalogo</p>
<?php




$conexion =mysqli_connect("localhost","tienda","tienda","databaseTiendaOnline");
mysqli_set_charset($conexion, "utf8");
$query = "SELECT * FROM productos WHERE existencias > 8";
$resultado = mysqli_query($conexion, $query);
while ($fila = mysqli_fetch_array($resultado)) {
    echo "<article>";
    echo "<a href='producto.php?id=".$fila['id']."'><h3>".$fila['nombre']."<h3/></a>";
    echo "<img src='".$fila['imagen']."'width=40%>";
    //$peticion2 = "SELECT * FROM productos WHERE id =". $fila['descripcion']."LIMIT 15";
    //$resultado2 =mysqli_query($conexion,$peticion2);
    //while ($fila2 = mysqli_fetch_array($resultado2)) {
        echo "<p>".$fila['descripcion']."<p/>";
    //}
    echo "<p>Precio: $".$fila['precio']."<p/>";

    //echo "<br>";
    echo "<a href='producto.php?id=".$fila['id']."'><button class= 'botoncompra'>Más Informacion</button></a>";
    echo "<button class= 'botoncompra' value='".$fila['id']."''>Añadir al carrito</button>";
    

    echo "</article>";
}
mysqli_close($conexion);
?>

<?php include "includes/footer.php" ?>