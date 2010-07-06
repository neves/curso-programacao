<?

/**
 * Esta classe representa um elo em uma corrente de dados.
 */
class Elo
{
  public $valor = 0; // valor armazenado neste Elo.
  public $proximo = null; // ponteiro para o próximo Elo na corrente.
}

/**
 * Recebe um Elo e imprime seu valor e do próximo até o fim da corrente.
 */
function imprimir_lista(Elo $elo)
{
  echo "\ninicio: ";
  do {
    echo $elo->valor;
    echo " => ";
  }while( ($elo = $elo->proximo) != null );
  echo "fim.\n\n";
}

/**
 * Recebe um array de valores e retorna uma corrente de elos com estes valores.
 */
function converte_array_para_lista(Array $valores)
{
  $proximo = null;
  while( ($valor = array_pop($valores) ) !== null):
    $elo = new Elo;
    $elo->valor = $valor;
    $elo->proximo = $proximo;
    $proximo = $elo;
  endwhile;
  return $elo;
}

?>