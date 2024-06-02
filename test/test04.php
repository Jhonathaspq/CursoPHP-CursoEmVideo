<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h1>Calculo de fatorial</h1>
        <form action="test04.php" method="get">
            <label for="name">Valor:</label>
            <input type="number" name="val">



            <input type="submit" value="Enviar">
        </form>
    </div>
    <?php
    $v = (isset($_GET["val"]) ? $_GET["val"] : 6);
    // echo "<h6>Calculando o fatorial de $v</h6>";

    $c = $v;
    $fat = 1;
    do {
        $fat *= $c;
        $c--;
    } while ($c >= 1);
    echo "<br><br>O fatorial de $v é $fat";
    ?><br>
    <a href="JavaScript:location.reload(true);"><button>Reset</button></a>
</body>

</html>