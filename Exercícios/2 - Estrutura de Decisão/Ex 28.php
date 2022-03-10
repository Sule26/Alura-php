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
        $carne = $_GET["c"];
        $kg = $_GET["k"];
        $pagamento = $_GET["p"];

        if ($carne == "F" or $carne == "f") {
            if ($kg > 5) {
                $valor = $kg * 5.80;
            } else {
                $valor = $kg * 4.90;
            }
            echo "Carne: File Duplo<br>";
        }

        if ($carne == "A" or $carne == "a") {
            if ($kg > 5) {
                $valor = $kg * 6.80;
            } else {
                $valor = $kg * 5.90;
            }
            echo "Carne: Alcatra<br>";
        }

        if ($carne == "P" or $carne == "p") {
            if ($kg > 5) {
                $valor = $kg * 7.80;
            } else {
                $valor = $kg * 6.90;
            }
            echo "Carne: Picanha<br>";
        }
        echo "Quantidade(Kg): $kg<br>";
        if ($pagamento == "S" or $pagamento == "s") {
            $desconto = ($valor * 5) / 100;
            $valor -= $desconto;
            echo "Valor do desconto: R$$desconto<br>";
        }
        echo "Preço: R$$valor<br>";

        ?>
    </div>
</body>

</html>
