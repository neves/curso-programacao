<?

// ENTRADA

$resultados = $argv[1];
$porPagina = $argv[2];

// LOGICA

$paginas = ceil($resultados / $porPagina);

// .............................. SAÍDA ..............................

echo "
$resultados resultados exibidos em $paginas paginas

";

?>