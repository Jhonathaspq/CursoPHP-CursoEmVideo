<?php
$valor=$_GET["v"];
$rq=sqrt($valor);
echo "A raiz de $valor é igual a ".number_format($rq,2);
?><br>
<a href="_modelohtml.html"><button>Voltar</button></a>