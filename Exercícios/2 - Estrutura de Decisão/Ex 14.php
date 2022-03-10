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
        $media = ($n1 + $n2) / 2;
        echo "Média: $media<br>";
        if ($media < 4) {
            echo "Conceito E";
        } else if ($media < 6) {
            echo "Conceito D";
        } else if ($media < 7.5) {
            echo "Conceito C";
        } else if ($media < 9) {
            echo "Conceito B";
        } else {
            echo "Conceito A";
        }


        ?>
    </div>
</body>

</html>
