<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones_02</title>

</head>
<body>

    <form action="funciones_02.php" method="get">
            <p>Introduce una cantidad <input type="number" name="num1" autofocus=""></p>
            <p><input type="submit" value="Calcular"></p>
    </form>

    <?php

    if (isset($_GET["num1"])){

        function sindescuento($x){
            return $x;
        }
        function descuento10($x){
            return $x*0.9;
        }
        function descuento15($x){
            return $x*0.85;
        }

        if ($_GET["num1"]<100){
            echo sindescuento($_GET["num1"]);
        } else if ($_GET["num1"]>=100 and $_GET["num1"]<499.99){
            echo descuento10($_GET["num1"]);
        } else {
            echo descuento15($_GET["num1"]);
        }
    }
    ?>

    

</body>
</html>