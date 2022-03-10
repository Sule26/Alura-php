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
        $a = $_GET["a"];
        $b = $_GET["b"];
        $c = $_GET["c"];
        if ($a == 0) {
            echo "Não é uma equação do segundo grau";
        } else {
            $delta = ($b ** 2) - 4 * $a * $c;
            echo "Delta: $delta<br>";
            if ($delta > 0) {
                $r1 = (-$b + sqrt($delta)) / 2 * $a;
                $r2 = (-$b - sqrt($delta)) / 2 * $a;
                echo "Raízes: $r1 e $r2";
            } else {
                echo "Delta negativo";
            }
        }
        ?>
    </div>
</body>

</html>
