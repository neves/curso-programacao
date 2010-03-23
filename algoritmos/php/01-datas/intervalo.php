<?

$di = new DateInterval("P1D");
print_r($di);
echo $di->format("%d dias");

$hoje = new DateTime("today");

print_r($hoje);
$hoje->add($di);
print_r($hoje);

$prox = new DateTime("2th day");
$dp = new DatePeriod($hoje, $di, $prox);
print_r($dp);
print_r($prox);

foreach($dp as $d) echo $d->format("Y-m-d H:i:s\n");

?>