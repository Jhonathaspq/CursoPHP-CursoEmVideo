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
    $a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
    $i = date("Y") - $a;
    echo "Voce nasceu em $a e tem $i anos.<br><br>";
    if ($i < 16) {
      $tipovoto = "Não vota";
    } elseif (($i > 16 && $i < 18) || ($i > 65)) {
      $tipovoto = "Voto Opcional";
    } else {
      $tipovoto = "Voto Obrigatorio";
    }
    echo "Para essa idade, $tipovoto";
    ?>
  </div>
  <button><a href="02exercicio.html">Voltar</a></button>
</body>

</html>