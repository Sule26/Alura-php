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
        $salario = $_GET["s"];
        echo "Saláraio antes do reajuste: R$$salario<br>";
        if ($salario <= 280) {
            $valor_aumento = (($salario * 20) / 100);
            echo "Porcentual de aumento aplicado: 20%";
        } else if ($salario <= 700) {
            $valor_aumento = (($salario * 15) / 100);
            echo "Porcentual de aumento aplicado: 15%";
        } else if ($salario <= 1500) {
            $valor_aumento = (($salario * 10) / 100);
            echo "Porcentual de aumento aplicado: 10%";
        } else {
            $valor_aumento = (($salario * 5) / 100);
            echo "Porcentual de aumento aplicado: 5%";
        }
        echo "<br>Valor do aumento: R$$valor_aumento";
        $novo_salario = $salario + $valor_aumento;
        echo "<br>Novo salário: R$$novo_salario";
        ?>
    </div>
</body>

</html>
