<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones_01</title>

</head>
<body>

    <form action="funciones_01.php" method="get">
            <p>Introduce el primer valor <input type="number" name="num1" autofocus=""></p>
            <p>Selecciona la operación que quieres realizar <select name="operacion">
                                                                <option value="suma">Suma</option>
                                                                <option value="resta">Resta</option>
                                                                <option value="multiplicacion">Multiplicación</option>
                                                                <option value="division">División</option>
                                                              </select></p>
            <p>Introduce el segundo valor <input type="number" name="num2"></p>
            <p><input type="submit" value="Calcular"></p>
    </form>

    <?php

    if (isset($_GET["operacion"])){

        function suma($x,$y){
            return $x+$y;
        }
        function resta($x,$y){
            return $x-$y;
        }
        function multiplicacion($x,$y){
            return $x*$y;
        }
        function division($x,$y){
            return $x/$y;
        }

        if ($_GET["operacion"]=="suma"){
            echo suma($_GET["num1"],$_GET["num2"]);
        } else if ($_GET["operacion"]=="resta"){
            echo resta($_GET["num1"],$_GET["num2"]);
        } else if ($_GET["operacion"]=="multiplicacion"){
            echo multiplicacion($_GET["num1"],$_GET["num2"]);
        } else {
            echo division($_GET["num1"],$_GET["num2"]);
        }
    }
    ?>

    

</body>
</html>