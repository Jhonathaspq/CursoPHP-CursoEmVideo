<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
    <div>
        <form action="02-tabuada.php" method="get">
            <h1>*Tabuada*</h1>
            <label for="#">Escolha um numero:</label>
            <select name="num" id="">
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
                ?>
            </select>
            <input type="submit" value="Calcular">
        </form>
    </div>
</body>

</html>