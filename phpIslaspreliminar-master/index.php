<?php

require_once ("pasajero.php");
require_once ("ferry.php");
require_once ("ruta.php");
require_once ("agencia.php");
require_once ("tarifapasajero.php");
require_once ("tarifavehiculo.php");

$p1 = new Pasajero ("Juan", "A00000000", "2005-10-10", true);


$f1 = new Ferry (1, 300, 50);

$rutahp = new Ruta ("HIERRO", "PALMA", $f1, 20, 3);

$transmediterranea = new Agencia ();
$transmediterranea->inicializarRuta($rutahp);
echo $transmediterranea->venderBillete ("HIERRO", "PALMA", $p1);

echo '<pre>';
print_r($p1);
print_r($f1);
print_r($rutahp);
print_r($transmediterranea);
echo '</pre>';