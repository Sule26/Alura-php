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
        $a = $_GET["a"];
        $b = $_GET["b"];
        $c = $_GET["c"];
        $d = $_GET["d"];
        $e = $_GET["e"];

        echo "Telefonou para a vítima? $a<br>";
        echo "Esteve no local do crime? $b<br>";
        echo "Mora perto da vítima? $c<br>";
        echo "Devia para a vítima? $d<br>";
        echo "Já trabalhou com a vítima? $e<br><br>";

        if ($a == "S" or $a == "s") {
            $acertos += 1;
        }
        if ($b == "S" or $b == "s") {
            $acertos += 1;
        }
        if ($c == "S" or $c == "s") {
            $acertos += 1;
        }
        if ($d == "S" or $d == "s") {
            $acertos += 1;
        }
        if ($e == "S" or $e == "s") {
            $acertos += 1;
        }

        if ($acertos == 5) {
            echo "ASSASSINO!";
        } else if ($acertos == 2) {
            echo 'Suspeita!';
        } else {
            echo "Cúmplice!";
        }

        ?>
    </div>
</body>

</html>
