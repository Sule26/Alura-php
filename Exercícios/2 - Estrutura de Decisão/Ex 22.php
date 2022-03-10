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
        if ($n % 2 == 0) {
            echo "$n é par!";
        } else {
            echo "$n é impar!";
        }
        ?>
    </div>
</body>

</html>
