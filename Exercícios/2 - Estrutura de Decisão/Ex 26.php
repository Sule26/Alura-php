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
        $combustivel = $_GET["c"];
        $litros = $_GET["l"];

        if ($combustivel == "A" or $combustivel == "a") {
            if ($litros < 20) {
                $valor = ($litros * 1.90) - ((($litros * 1.90)) * 3) / 100;
            } else {
                $valor = ($litros * 1.90) - ((($litros * 1.90)) * 5) / 100;
            }
        }
        if ($combustivel == "G" or $combustivel == "g") {
            if ($litros < 20) {
                $valor = ($litros * 2.50) - ((($litros * 2.50)) * 4) / 100;
            } else {
                $valor = ($litros * 2.50) - ((($litros * 2.50)) * 6) / 100;
            }
        }

        echo "Combustível: $combustivel<br>";
        echo "Litros: $litros<br>";
        echo "Valor: R$$valor<br>";

        ?>
    </div>
</body>

</html>
