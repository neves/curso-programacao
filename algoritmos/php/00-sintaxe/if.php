<?
$um = 1;
$dois = 2;
// if simples
if ($dois > $um)
	echo "O maior eh o $dois \n";

// if com mais de um comando precisa de escopo.(dois pontos + endif)
if ($dois > $um):
	echo "O maior eh o $dois \n";
	echo "e o menor eh o $um \n";
endif;

// if e else
if ($um > $dois)
	echo "O maior eh o $um \n";
else
	echo "O maior eh o $dois \n";

// if e else com escopo
if ($um > $dois):
	echo "O maior eh o $um \n";
	echo "e o menor eh o $dois \n";
else:
	echo "O maior eh o $dois \n";
	echo "e o menor eh o $um \n";
endif;

// if dentro de else
if ($um > $dois)
	echo "O maior eh o $um \n";
else
	if ($um == $dois)
		echo "Os numeros sao iguais! \n";

// elseif
if ($um > $dois)
	echo "O maior eh o $um \n";
elseif ($um == $dois)
	echo "Os numeros sao iguais! \n";
?>