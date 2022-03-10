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
        if ($letra == "a" or $letra == "e" or $letra == "i" or $letra == "o" or $letra == "u") {
            echo "$letra é uma vogal";
        } else {
            echo "$letra é uma consoante";
        }

        ?>
    </div>
</body>

</html>
