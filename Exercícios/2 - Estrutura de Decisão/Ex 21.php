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
        $valor = $_GET["v"];
        if ($valor >= 10 and $valor <= 600) {
            if ($valor >= 100) {
                $nota100 = floor($valor / 100);
                $valor -= $nota100 * 100;
                echo "Notas de 100: $nota100<br>";
            }
            if ($valor >= 50) {
                $nota50 = floor($valor / 50);
                $valor -= $nota50 * 50;
                echo "Notas de 50: $nota50<br>";
            }
            if ($valor >= 20) {
                $nota20 = floor($valor / 20);
                $valor -= $nota20 * 20;
                echo "Notas de 20: $nota20<br>";
            }
            if ($valor >= 10) {
                $nota10 = floor($valor / 10);
                $valor -= $nota10 * 10;
                echo "Notas de 10: $nota10<br>";
            }
            if ($valor >= 5) {
                $nota5 = floor($valor / 5);
                $valor -= $nota5 * 5;
                echo "Notas de 5: $nota5<br>";
            }
            if ($valor >= 1) {
                $nota1 = $valor;
                echo "Notas de 1: $nota1<br>";
            }
        } else if ($valor < 10) {
            echo "Valor abaixo do mínimo";
        } else {
            echo "Valor acima do máximo";
        }
        ?>
    </div>
</body>

</html>
