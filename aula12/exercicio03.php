<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
    $num = (isset($_GET["num"])?$_GET["num"]:1);
echo "<h2>Tabuada do nº $num</h2>";
for ($i = 1; $i <= 10; $i++) {
    $res = $num * $i;
    echo "$num x $i = $res<br>";
}
    ?>
    <a href="exercicio03.html"><button>Voltar</button></a>
</div>
</body>
</html>
 