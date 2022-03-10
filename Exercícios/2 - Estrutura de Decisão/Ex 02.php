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
        if ($n1 >= 0) {
            echo "$n1 é positivo";
        } else {
            echo "$n1 é negativo";
        }
        ?>
    </div>
</body>

</html>
