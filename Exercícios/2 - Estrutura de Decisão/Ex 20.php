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
        $n3 = $_GET["n3"];

        $media = ($n1 + $n2 + $n3) / 3;
        if ($media == 10) {
            echo "Aprovado com Distinção!";
        } else if ($media >= 7) {
            echo "Aprovado!";
        } else {
            echo "Reprovado!";
        }

        if ($media != 10) {
            echo "<br>Média: $media";
        }
        ?>
    </div>
</body>

</html>
