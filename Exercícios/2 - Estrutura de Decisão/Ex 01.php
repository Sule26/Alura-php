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
        if ($n1 > $n2) {
            echo "$n1 é maior que $n2";
        } else {
            echo "$n2 é maior que $n1";
        }
        ?>
    </div>
</body>

</html>
