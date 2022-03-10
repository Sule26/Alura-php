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
        $ano = $_GET["ano"];
        if ($ano % 4 == 0) {
            $bissexto = true;
            if ($ano % 100 == 0 and $ano % 400 != 0) {
                $bissexto = false;
            }
        }

        if ($bissexto) {
            echo "O ano é bissexto";
        } else {
            echo "O ano não é bissexto";
        }
        ?>
    </div>
</body>

</html>
