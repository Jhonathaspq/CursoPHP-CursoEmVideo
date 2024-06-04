<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$num = $_GET["marca"];

switch ($num) {
    case 1:
        echo "Carro pertence a marca Honda";
        break;
    case 2:
        echo "Carro pertence a marca Volks";
        break;
    case 3:
        echo "Carro pertence a marca Chevrolet";
        break;
    case 4:
        echo "Carro pertence a marca Jeep";
        break;
    case 5:
        echo "Carro pertence a marca Renault";
        break;
    default:
    echo "Invalid option";
}
?>
<br><br><a href="teste.html"><button>Voltar</button></a>
</body>
</html>