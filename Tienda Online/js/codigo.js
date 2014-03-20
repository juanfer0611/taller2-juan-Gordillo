$ (document).ready(inicio)
function inicio(){
	$(".botoncompra").click(agregar)
	//$("#carrito").load("includes/carro.php");

} 
function agregar(){
	//$("#carrito").append($(this).val());
	$("#carrito").load("includes/carro.php?p="+$(this).val());

}