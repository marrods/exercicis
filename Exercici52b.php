<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array foreach</title>
</head>
<body>
   
    <?php
    function discount1($a,$b=0.10){
        return $a-($a*$b);
    }
    function discount2($a,$b=0.15){
        return $a-($a*$b);
    }
    
    $total=0;
    $item=$_GET["item"];



    foreach($item as $indice=>$valor){
        echo "Has gastado $valor euros en: $indice <br>";

        $total=$total+$valor;
    }

        echo "En total te has gastado $total euros. Comprovando si tienes descuento <br>";

    if ($total<=40){
        echo "Descuento no aplicable debido a que su pedido es inferior a 40€<br>
        El importe total es $total €";
    }else if ($total>40 and $total<=100){
        echo "Descuento del 10% por haber gastado $total €<br>
        El precio con el descuento aplicado es: "; 
        echo discount1($total); 
    }else{
        echo "Descuento del 15% por haber consumido $total €<br>
        El precio con el descuento aplicado es: ";
        echo discount2($total); 
    }
?>

</body>
</html>