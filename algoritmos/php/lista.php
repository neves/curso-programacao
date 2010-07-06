<?

/**
 * Sem alterar a interface, Implementar a funзгo abaixo para inverter uma lista encadeada de Elo.
 * Anote a hora exata em que vocк comeзou a ler este problema,
 * para depois calcular quanto tempo levou para resolver este problema.
 */

require_once "lista.inc.php"; // funcoes auxiliares e classe Elo.

// return Elo
function inverter_lista(Elo $elo)
{
  return $elo;
}

$elo = converte_array_para_lista(range(10, 20));

imprimir_lista($elo); // inicio: 10 => 11 => 12 => 13 => 14 => 15 => 16 => 17 => 18 => 19 => 20 => fim.

$elo = inverter_lista($elo);

imprimir_lista($elo); // inicio: 20 => 19 => 18 => 17 => 16 => 15 => 14 => 13 => 12 => 11 => 10 => fim.

?>