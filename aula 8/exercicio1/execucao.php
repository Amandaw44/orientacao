<?php

require_once("modelo/Cidade.php");
require_once("modelo/Estado.php");

$parana = new Estado();
$parana->setNome("Paraná");
$parana->setSigla("PR");

$santaCatarina = new Estado();
$santaCatarina->setNome("Santa Catarina");
$santaCatarina->setSigla("SC");

$florianopolis= new Cidade;
$florianopolis->setNome("Florianopolis");
$florianopolis->setAltitude("3");
$florianopolis->setQtdHabitantes("537211");

$blumenau = new Cidade;
$blumenau->setNome("Blumenau");
$blumenau->setAltitude("21");
$blumenau->setQtdHabitantes("363340");

$fozdoIguacu = new Cidade;
$fozdoIguacu->setNome("Foz do Iguaçu");
$fozdoIguacu->setAltitude("192");
$fozdoIguacu->setQtdHabitantes("285415");

$cascavel = new Cidade;
$cascavel->setNome("Cascavel");
$cascavel->setAltitude("781");
$cascavel->setQtdHabitantes("350000");

echo "A cidade de " . $florianopolis->getNome() . "localizada no estado de " . $florianopolis->getEstado() . "possui " . $florianopolis->getQtdHabitantes() . "habitantes e uma altitude de " . $florianopolis->getAltitude() . "metros.";

echo "A cidade de " . $blumenau->getNome() . "localizada no estado de " . $blumenau->getEstado() . "possui " . $blumenau->getQtdHabitantes() . "habitantes e uma altitude de " . $blumenau->getAltitude() . "metros.";

echo "A cidade de " . $fozdoIguacu->getNome() . "localizada no estado de " . $fozdoIguacu->getEstado() . "possui " . $fozdoIguacu->getQtdHabitantes() . "habitantes e uma altitude de " . $fozdoIguacu->getAltitude() . "metros.";

echo "A cidade de " . $cascavel->getNome() . "localizada no estado de " . $cascavel->getEstado() . "possui " . $cascavel->getQtdHabitantes() . "habitantes e uma altitude de " . $cascavel->getAltitude() . "metros.";