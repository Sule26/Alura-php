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
        $turno = $_GET["t"];
        if ($turno == "M" or $turno == "m") {
            echo "Bom dia!";
        } else if ($turno == "V" or $turno == "v") {
            echo "Boa tarde!";
        } else if ($turno == "N" or $turno == "n") {
            echo "Boa noite!";
        } else {
            echo "ERRO!";
        }
        ?>
    </div>
</body>

</html>
