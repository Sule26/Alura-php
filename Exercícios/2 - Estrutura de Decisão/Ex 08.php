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
        $p1 = $_GET["a"];
        $p2 = $_GET["b"];
        $p3 = $_GET["c"];

        if ($p1 < $p2 and $p1 < $p3) {
            echo "Vc deve comprar o primeiro de R$$p1";
        } else if ($p2 < $p1 and $p2 < $p3) {
            echo "Vc deve comprar o segundo de R$$p2";
        } else {
            echo "Vc deve comprar o terceiro de R$$p3";
        }
        ?>
    </div>
</body>

</html>
