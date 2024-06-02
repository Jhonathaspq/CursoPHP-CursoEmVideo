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
        $num = isset($_GET["num"]) ? $_GET["num"] : 2; // definindo o número para saber se é primo
        echo "Analisando o numero: $num...<br>";
        $a = 0; // acumulador
        echo "Valores múltiplos: ";
        //Definindo laço para repetir pela quantia informada
        for ($i = 1; $i <= $num; $i++) {
            $r = $num % $i;
            if ($r == 0) { //caso sobre 0 entre a divisão do contador do laço pelo numero acrescento mais 1 no acumulador
                $a++;
                echo "$i ";
            }
        }
        if ($a > 2) { //caso o resto das divisões somadas sejam maior que 2 significa que o número não é primo
            echo "<br>Total de múltiplos: $a<br>";
            echo "Resultado: $num NÃO É PRIMO!";
        } else { //Se não o número é primo
            echo "<br>Total de múltiplos: $a<br>";
            echo "Resultado: $num É PRIMO!";
        }
        ?>
        <br><br><a href="exercicio003.php"><button>Voltar</button></a>
    </div>
</body>

</html>