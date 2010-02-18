<?

// ENTRADA

$b1 = $argv[1];
$b2 = $argv[2];
$b3 = $argv[3];
$b4 = $argv[4];

// LOGICA

$media = ($b1 + $b2 + $b3 + $b4) / 4;

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