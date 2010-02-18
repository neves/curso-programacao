<?

define("PESO_B1", 1);
define("PESO_B2", 2);
define("PESO_B3", 3);
define("PESO_B4", 4);

// ENTRADA

$b1 = $argv[1];
$b2 = $argv[2];
$b3 = $argv[3];
$b4 = $argv[4];

// LOGICA

$soma = PESO_B1 * $b1 + PESO_B2 * $b2 + PESO_B3 * $b3 + PESO_B4 * $b4;
$pesos = PESO_B1 + PESO_B2 + PESO_B3 + PESO_B4;
$media = $soma / $pesos;

// SAIDA

echo "
Notas dos Bimestres
===================
1 Bimestre: $b1
2 Bimestre: $b2
3 Bimestre: $b3
4 Bimestre: $b4
-------------------
Media Anual: $media

";

?>