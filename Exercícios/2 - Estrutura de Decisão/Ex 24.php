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
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $escolha = $_GET["o"];
        $problema = false;
        switch ($escolha) {
            case 1:
                $resultado = $n1 + $n2;
                break;
            case 2:
                $resultado = $n1 - $n2;
                break;
            case 3:
                $resultado = $n1 * $n2;
                break;
            case 4:
                $resultado = $n1 / $n2;
                break;
            case 5:
                $resultado = $n1 ** $n2;
                break;
            default:
                echo "Opção inválida";
                $problema = true;
        }
        if (!$problema) {
            if ($resultado % 2 == 0) {
                echo "$resultado é par!<br>";
            } else {
                echo "$resultado é ímpar!<br>";
            }

            if ($resultado >= 0) {
                echo "$resultado é positivo!<br>";
            } else {
                echo "$resultado é negativo!<br>";
            }

            if ($resultado == round($resultado)) {
                echo "$resultado é inteiro!<br>";
            } else {
                echo "$resultado é decimal!<br>";
            }
        }

        ?>
    </div>
</body>

</html>
