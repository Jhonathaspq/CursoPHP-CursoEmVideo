<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            background-color: bisque;
        }
    </style>
</head>

<body>
    <?php
    $nn = $_POST["n1"];

    $nnn = $_POST["n2"];



    if (empty($nn) && empty($nnn)) {
        echo "<script>alert('Preencha os campos corretamente!');</script>";
        echo "<script>window.location.href='testefuncao.html';</script>";
    } else {
        echo  "";
        function exibirNome($nome, $idade)
        {
            echo "<script>alert('Dados enviados com sucesso!');</script>";
            echo "Olá, eu sou o $nome e tenho $idade anos.";
        }
        exibirNome($nn, $nnn);
    }
    ?>
    <br><a href="testefuncao.html"><button>Voltar</button></a>
</body>

</html>