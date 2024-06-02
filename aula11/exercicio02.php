<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
    <!-- criar varios inputs com o while -->
    <div>
        <form action="exercicio02.php" method="get">
            <?php
            $i = 1;
            while ($i <= 3) {
                echo "Valor $i: <input type='number' name='v$i' max='100' min='0' value='0'><br />";
                $i++;
            } ?>
            <input type="submit" value="Enviar" class="botao" />
        </form>



        <!-- mostrar os resultados dos inputs -->
        <?php
        $i = 1;
        while ($i <= 3) {
            $v = "num" . $i;
            $url = "v" . $i;
            $$v = isset($_GET[$url]) ? $_GET[$url] : 5;
            $i++;
        }

        $i = 1;
        while ($i <= 3) {
            $v = "num" . $i;
            echo "<h5>Valor  $i : " . $$v . "<br>";
            $i++;
        }
        ?>
    </div>
</body>

</html>