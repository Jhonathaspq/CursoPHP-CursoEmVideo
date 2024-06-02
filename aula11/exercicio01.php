<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
    <!-- contagem estrutura de repetição -->
    <div>
        <?php
        $c = 10;
        while ($c >= 1) {
            echo "O valor de C é $c <br>";
            $c-=2;
        }
        ?>
    </div>
</body>

</html>