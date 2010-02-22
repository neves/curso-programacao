<?

// ENTRADA
$f = 89; // temperatura em Fahrenheit

// PROCESSAMENTO
$celsius = ($f - 32) * (5/9);

// SAÍDA
$celsiusFormatado = number_format($celsius, 1);

echo "
Fahrenheit: $f F
Celsius: $celsiusFormatado C
";
?>