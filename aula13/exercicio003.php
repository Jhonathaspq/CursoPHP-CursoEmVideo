<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form action="exercicio03.php" method="get">
        <H3>É primo?</H3>
        <label for="">Escolha um valor: </label>
        <select name="num" id="">
            <?php
            for($c=1;$c<=100;$c++){
                echo "<option value='$c'>$c</option>";
            }
            ?>
        </select>
        <input type="submit" value="É primo?">
    </form>
</div>
</body>
</html>
 