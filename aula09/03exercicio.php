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
    $nome = isset($_GET["nome"]) ? $_GET["nome"] : 'Fulano';
    $n1 = isset($_GET["n1"]) ? $_GET["n1"] : 5;
    $n2 = isset($_GET["n2"]) ? $_GET["n2"] : 5;
    $media = ($n1+$n2)/2;

    // echo "Voce nasceu em $a e tem $i anos.<br><br>";
    if ($media < 5) {
      $result = "Está reprovado.";
    } elseif (($media >= 5 && $media < 7)) {
      $result = "Está em recuperação.";
    } else {
      $result = "Está aprovado.";
    }
    echo "O média do aluno $nome é $media, o aluno $result";
    ?>
  </div>
  <button><a href="03exercicio.html">Voltar</a></button>
</body>

</html>