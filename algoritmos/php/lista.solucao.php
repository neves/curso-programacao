<?

require_once "lista.inc.php"; // funcoes auxiliares e classe Elo.

//@returns Elo
function inverter_lista_recursivo(Elo $elo)
{
  if ($elo->proximo === null) return $elo;
  $proximo = $elo->proximo;
  $elo->proximo = null;
  $ultimo = inverter_lista($proximo);
  $proximo->proximo = $elo;
  return $ultimo;
}

//@returns Elo
function inverter_lista_iterativo2(Elo $elo)
{
  $anterior = null;
  while($elo != null):
    $proximo = $elo->proximo;
    $elo->proximo = $anterior;
    $anterior = $elo;
    $elo = $proximo;
  endwhile;
  return $anterior;
}


//@returns Elo
function inverter_lista_iterativo(Elo $elo)
{
  $anterior = null;
  do {
    $proximo = $elo->proximo;
    $elo->proximo = $anterior;
    if ($proximo !== null):
      $anterior = $elo;
      $elo = $proximo;
    endif;
  }while($proximo !== null);
  return $elo;
}

function array2lista_foreach(Array $valores)
{
  $anterior = null;
  foreach($valores as $valor):
    $elo = new Elo;
    if (!$anterior)
      $primeiro = $elo;
    $elo->valor = $valor;
    if ($anterior)
      $anterior->proximo = $elo;
    $anterior = $elo;
  endforeach;
  return $primeiro;
}

$elo = converte_array_para_lista(range(10, 20));

imprimir_lista($elo);

$elo = inverter_lista_iterativo2($elo);

imprimir_lista($elo);

?>