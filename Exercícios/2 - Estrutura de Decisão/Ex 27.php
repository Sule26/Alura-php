<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="_css/estilo.css" />
    <title></title>
</head>

<body>
    <div>
        <?php
        $morango = $_GET["m"];
        $apple = $_GET["a"];

        if ($morango > 5) {
            $valor += $morango * 2.20;
            $peso += $morango;
        } else {
            $valor += $morango * 2.50;
            $peso += $morango;
        }

        if ($apple > 5) {
            $valor += $apple * 1.50;
            $peso += $apple;
        } else {
            $valor += $apple * 1.80;
            $peso += $apple;
        }

        if ($peso > 8 or $valor > 25) {
            $valor -= ($valor * 10) / 100;
        }

        echo "Maçãs(Kg): $apple<br>";
        echo "Morangos(Kg): $morango<br>";
        echo "Valor: R$$valor<br>";

        ?>
    </div>
</body>

</html>
