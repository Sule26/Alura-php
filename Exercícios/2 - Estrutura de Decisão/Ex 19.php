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
        if ($n > 0) {
            if ($n >= 100) {
                $centena = floor($n / 100);
                $n -= $centena * 100;
            }

            if ($n >= 10) {
                $dezena = floor($n / 10);
                $n -= $dezena * 10;
            }
            if ($n < 10) {
                $unidade = $n;
            }

            if ($centena != 0) {
                echo "$centena centenas";
                if ($dezena != 0 and $unidade != 0) {
                    echo ", $dezena dezenas e $unidade unidades";
                } else if ($dezena != 0 and $unidade == 0) {
                    echo " e $dezena dezenas";
                } else if ($unidade != 0) {
                    echo " e $unidade unidades";
                }
            } else if ($dezena != 0) {
                echo "$dezena dezenas";
                if ($unidade != 0) {
                    echo " e $unidade unidades";
                }
            } else if ($unidade != 0) {
                echo "$unidade unidades";
            }
        } else {
            echo "Número inválido!";
        }

        ?>
    </div>
</body>

</html>
