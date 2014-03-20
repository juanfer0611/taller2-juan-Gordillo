<?php 
session_start();
if(!isset($_SESSION['contador'])){
    $_SESSION['contador']=0;
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Tienda</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

     <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/estilosTienda.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        
        <header>

            

        <a href='index.php' class="titulopagina"><h1>tiesto Store</h1></a>
        <h3>Consigue tu tiesto a buen precio</h3>
            
        


                <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="catalogo.php">Catalogo</a></li>
                    <li><a href="profile.php?id=1">Profile</a></li>

                </ul>
            </nav>    
            

     </header>
     <section>

          <div class="contenedorCarro">

        <img class="tienda" src="img/carrito.png">
        <div id="carrito" style="background:rgb(200,200,200);color:white;"> carrito </div>

       <a id="botones" href='includes/destruir.php'> <img src="img/vaciar.png"></a>
       <a id="botones"  href='confirmar.php'><img src="img/confirmar.png"></a>

       </div>
   
