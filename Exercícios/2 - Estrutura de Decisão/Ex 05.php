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
        $media = ($n1 + $n2) / 2;
        echo "Media = $media";
        if ($media == 10) {
            echo "<br>Aprovado com distinção";
        } else if ($media >= 7) {
            echo "<br>Aprovado";
        } else {
            echo "<br>Reprovado";
        }
        ?>
    </div>
</body>

</html>
