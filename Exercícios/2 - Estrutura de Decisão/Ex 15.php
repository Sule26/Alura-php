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
        $l1 = $_GET["a"];
        $l2 = $_GET["b"];
        $l3 = $_GET["c"];
        if ($l1 < $l2 + $l3 and $l2 < $l1 + $l3 and $l3 < $l1 + $l2) {
            echo "É possível formar um triângulo<br>";
            if ($l1 == $l2 and $l2 == $l3) {
                echo "É um triângulo equilátero";
            } else if ($l1 == $l2 or $l1 == $l3 or $l2 == $l3) {
                echo "É um triângulo isósceles";
            } else {
                echo "É um triângulo escaleno";
            }
        } else {
            echo "Não é possível formar um triângulo";
        }
        ?>
    </div>
</body>

</html>
