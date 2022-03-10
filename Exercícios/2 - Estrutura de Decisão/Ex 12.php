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
        $valor_hora = $_GET["v"];
        $tempo = $_GET["t"];
        $salario_bruto = $valor_hora * $tempo;
        $inss = ($salario_bruto * 10) / 100;
        $fgts =  ($salario_bruto * 11) / 100;
        echo "Salário Bruto: ($valor_hora * $tempo)\t\t: R$$salario_bruto<br>";
        if ($salario_bruto > 900 and $salario_bruto <= 1500) {
            $ir = ($salario_bruto * 5) / 100;
            echo "(-) IR (5%)\t\t: R$$ir<br>";
        } else if ($salario_bruto <= 2500) {
            $ir = ($salario_bruto * 10) / 100;
            echo "(-) IR (10%)\t\t: R$$ir<br>";
        } else {
            echo "(-) IR (20%)\t\t: R$$ir<br>";
            $ir = ($salario_bruto * 20) / 100;
        }
        $desconto = $ir + $inss;
        $salario_liquido = $salario_bruto - $desconto;
        echo "(-) INSS (10%)\t\t: R$$inss<br>";
        echo "FGTS (11%)\t\t: R$$fgts<br>";
        echo "Total de Descontos\t\t: R$$desconto<br>";
        echo "Salário Líquido\t\t: R$$salario_liquido<br>";

        ?>
    </div>
</body>

</html>
