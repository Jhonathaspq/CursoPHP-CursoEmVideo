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
        $d = isset($_GET["estado"]) ? $_GET["estado"] : 0;
        switch ($d) {
            case 1:
                echo "Região norte";
                break;
            case 2:
                echo "Região nordeste";
                break;
            case 3:
                echo "Região centro-oeste";
                break;
            case 4:
                echo "Região sudeste";
                break;
            case 5:
                echo "Região sul";
                break;
            default:
                echo "Não selecionado";
        }

        ?>
        <a href="03exercicio.html" class="botao">Voltar</a>
    </div>
</body>

</html>