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
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $n3 = $_GET["c"];

        if ($n1 > $n2 and $n1 > $n3) {
            echo "$n1 é o maior";
        } else if ($n2 > $n1 and $n2 > $n3) {
            echo "$n2 é o maior";
        } else {
            echo "$n3 é o maior";
        }
        ?>
    </div>
</body>

</html>
