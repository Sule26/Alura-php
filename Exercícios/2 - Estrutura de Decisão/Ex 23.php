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
        $n = $_GET["n"];
        $round =  round($n);
        if ($n == $round) {
            echo "$n é um número inteiro!";
        } else {
            echo "$n é um número decimal!";
        }

        ?>
    </div>
</body>

</html>
