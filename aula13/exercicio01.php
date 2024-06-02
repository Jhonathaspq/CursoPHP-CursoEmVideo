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
    for ($c = 1; $c <= 10; $c++) {
      echo "#$c<br>";
    }
    echo "<br>";
    for ($c = 10; $c >= 1; $c--) {
      echo "#$c<br>";
    }
    echo "<br>";

    for ($c = 0; $c <= 50; $c += 5) {
      echo "#$c<br>";
    }
    ?>
  </div>
</body>

</html>