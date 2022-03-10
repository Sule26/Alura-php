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
        $letra = $_GET["l"];
        if ($letra == "F" or $letra == "f") {
            echo "Feminino";
        } else if ($letra == "M" or $letra == "m") {
            echo "Masculino";
        } else {
            echo "Sexo inválido";
        }
        ?>
    </div>
</body>

</html>
