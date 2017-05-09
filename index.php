<?php
include ('lib/Producto.php');
include ('lib/consultaProductos.php');

$oProducto1 = new Producto();
$oProducto1 ->nombre="Nuevo Producto1";
$oProducto1 ->codigo="001";
$oProducto2 = new Producto("Nuevo Producto2",100.000,"002");
$oProducto3 = new Producto("Nuevo Producto3",250.000,"003");

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
        
        $aProductos2= new ConsultaProductos();
        
        foreach ($aProductos2->Lista() as $oPro)
        {
        echo "Codigo Producto: ".$oPro->codigo."--Nombre: ".$oPro->nombre."--Precio: ".$oPro->precio."--ValorUSD: ".$oPro->totalUSD();
        echo '<br>';
        }
        ?>
    </body>
</html>