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
        $v = isset($_GET["val"]) ? $_GET["val"] : 1; //isset verifica se a variável existe
        echo "<h1>Calculando o fatorial de $v</h1>";

        $c = $v;
        $fat =1;
        do{
            $fat = $fat*$c;
            $c--;
        }while($c>=1);
        echo "<h2>$v ! = $fat</h2>";
        ?>
        <a href="exercicio02.html"><button class="botao">Voltar</button></a>
    </div>
</body>

</html>