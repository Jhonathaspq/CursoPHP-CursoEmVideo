<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $m = isset($_GET["marca"]) ? $_GET["marca"] : "gol";

    switch ($m) {
        case 1:
            echo "A marca é Honda";
            break;
        case 2:
            echo "A marca é Volkswagen";
            break;
        case 3:
            echo "A marca é chevrolet";
            break;
        case 4:
            echo "A marca é Jeep";
            break;
        case 5:
            echo "A marca é Renault";
            break;
        default:
            echo "Não selecionado";
    }

    ?>
    <a href="teste.html"><button>Voltar</button></a>
</body>

</html>