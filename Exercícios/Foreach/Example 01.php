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
        $pessoas = [
            "Sule" => [
                'idade' => 21,
                'ano' => 2000
            ],
            "Pedro Henrique" => [
                'idade' => 12,
                'ano' => 2009
            ],
            "Rejane" => [
                'idade' => 41,
                'ano' => 1977
            ]
        ];

        foreach ($pessoas as $nome => $info) {
            echo "$nome:<br>";
            echo "Idade: {$info['idade']}<br>";
            echo "Ano de nascimento: {$info['ano']}<br><br>";
        }

        ?>
    </div>
</body>

</html>
