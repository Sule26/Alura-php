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
        $dia = $_GET["dia"];
        $mes = $_GET["mes"];
        $ano = $_GET["ano"];

        $data_valida = false;
        $ano_bissexto = false;

        if ($ano <= 2022) {
            $data_valida = true;
            if ($ano % 4 == 0) {
                $ano_bissexto = true;
                if ($ano % 100 == 0 and $ano % 400 != 0) {
                    $ano_bissexto = false;
                }
            }
        }



        if ($mes == 1 or $mes == 3 or $mes == 5 or $mes == 7 or $mes == 8 or $mes == 10 or $mes == 12) {
            if ($dia <= 31) {
                $data_valida = true;
            } else {
                $data_valida = false;
            }
        } else if ($mes > 12) {
            $data_valida = false;
        } else if ($mes == 2) {
            if ($ano_bissexto) {
                if ($dia <= 29) {
                    $data_valida = true;
                } else {
                    $data_valida = false;
                }
            } else {
                if ($dia <= 28) {
                    $data_valida = true;
                } else {
                    $data_valida = false;
                }
            }
        } else {
            if ($dia <= 30) {
                $data_valida = true;
            } else {
                $data_valida = false;
            }
        }

        echo "$dia/$mes/$ano <br>";

        if ($data_valida) {
            echo "data válida";
        } else {
            echo "data inválida";
        }

        ?>
    </div>
</body>

</html>
