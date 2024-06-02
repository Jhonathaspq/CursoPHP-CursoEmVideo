<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <?php
        $n = isset($_GET["num"]) ? $_GET["num"] : 1;
        for ($c = 1; $c <= 10; $c++) {
            $res = $n * $c;
            echo "$n x $c = $res<br>";
        }

        ?>
        <br><br><a href="exercicio02.php"><button>Voltar</button></a>
    </div>
</body>

</html>