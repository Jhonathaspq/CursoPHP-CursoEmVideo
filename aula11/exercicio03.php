<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
    <div>
        <?php
        // $n1 = isset($_GET["n1"]) ? $_GET["n1"] : 1;
        // $n2 = isset($_GET["n2"]) ? $_GET["n2"] : 2;
        // $inc = isset($_GET["inc"]) ? $_GET["inc"] : 1;

        $ini = $_GET["n1"];
        if ($_GET["n1"] < $_GET["n2"]) {
            while ($ini <= $_GET["n2"]) {
                echo "$ini, ";
                $ini += $_GET["inc"];
            }
        } else {
            while ($ini >= $_GET["n2"]) {
                echo "$ini, ";
                $ini -= $_GET["inc"];
            }
        }
        ?>
        <br><br><a href="exercicio03.html"><button>Voltar</button></a>
    </div>
</body>

</html>