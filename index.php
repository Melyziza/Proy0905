<?php
include ('lib/Producto.php');

$oProducto1 = new Producto();
$oProducto1 ->nombre="Nuevo Producto1";
$oProducto1 ->codigo="001";
$oProducto2 = new Producto("Nuevo Producto2",0,"002");
$oProducto3 = new Producto("Nuevo Producto3",0,"003");

$oProductos[0]=$oProducto1;
$oProductos[1]=$oProducto2;
$oProductos[2]=$oProducto3;

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        foreach ($oProductos as $oPro)
        {
        echo $oPro->codigo." ".$oPro->nombre;
        echo '<br>';
        }
        ?>
    </body>
</html>