<?php

require_once("Agencia.php");

$ag1= new Agencia("HERMÉS");

$p1= new Pasajero("Juan","0789478C","23-12-1979",true);
$ag1->altaPasajero($p1);


$f1= new Ferry(1,300,50);

$rutahp=new Ruta("Hierro","Palma",$f1,20,3);


$p2= new Pasajero("Antonio","03487478V","08-02-1984",false);
$ag1->altaPasajero($p2);

$ag1->bajaPasajero("03487478V");


$o1= new Oficina("Palma","10002");
$ag1->altaOficina($o1);

$o2= new Oficina("10001","Hierro");
$ag1->altaOficina($o2);

$ag1->bajaOficina("10001");






echo"<pre>";
/*print_r ($p1);
print_r ($f1);
print_r ($rutahp);
print_r ($transmediterraneo);*/
print_r ($ag1);
echo"</pre>";