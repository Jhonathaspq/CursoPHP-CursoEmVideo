<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <form action="test03.php" method="get">
            <?php
            $c = 1;
            while ($c <= 3) {
                echo "Valor $c : <input type='number' name='v$c' id='num'><br><br>";
                $c++;
            }
            ?>

            <?php
            $i = 1;
            while ($i <= 3) {
                $v = "num" . $i;
                $url = "v" . $i;
                $$v = isset($_GET[$url]) ? $_GET[$url] : 2;
                $i++;
            }
            ?>

            <?php

            $i = 1;
            while ($i <= 3) {
                $v = "num" . $i;
                echo "Valor $i :" . $v. "<br>";
                $i++;
            }
            ?>


            <input type="submit" value="Enviar">
        </form>
    </div>
</body>

</html>