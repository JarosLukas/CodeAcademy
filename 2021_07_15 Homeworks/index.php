<?php

// Sukurkite 3 kintamuosius: skaičių, raidinės vertės bei tuščią kintamąjį ir juos išveskite į ekraną.

$nmb = 3;
$str = 'a';
$tmp = NULL;
var_dump($nmb, $str, $tmp);

// Parašykite skriptą, kuris išspausdintų paskutiniąsias 3 stringo raides.

$str = 'Lorem ipsum dolor';
var_dump(substr($str, -3));

// Sukurkite funkciją negative, kuri priimtų vieną argumentą "$skaicius" ir išvestų į ekraną atitinkamą neigiamą skaičių. (Įvedame 3, išveda -3)

function negative($number)
{
	return $number * -1;
}
var_dump(negative(3));

// Sukurkite funkciją kauliukas, kuri imituotų kauliuko metimą. (Į ekraną atspaudintų atsitiktinį skaičių nuo 1 iki 6); Užuomina: rand();

$dice = rand(1,6);
var_dump($dice);

// Parašykite funkciją pusePloto, kuri priimtų 2 argumentus ir išvestų į ekraną pusę abiejų skaičių sandaugą.
	
function halfArea($lenght,$width) {
	return($lenght * $width) / 2;
}
var_dump(halfArea(55,111));

// Sukurkite funkciją 'arEsiDarJaunas', kuri priimtų vieną argumentą amžius ir į ekraną išvestų pranešimą, kiek metų trūksta iki 100. (Pvž.: "Iki šimto jūms trūksta 70 metų! Dar gyventi liko daug!")
	
function areYouStillYoung($age) {
	$diff = 100 - $age;
	return 'Iki šimto metų jums trūksta '.$diff.' metų! Dar gyventi liko daug!';
}
var_dump(areYouStillYoung(34));

// Sukurkite funkciją, kuri priimtų argumentą farenheitas ir laipsnius iš farenheito konvertuotų į celsijų.

function fahrenheit_to_celsius($fahrenheit)
{
	$celsius = 5/9 * ($fahrenheit-32);
	return $celsius;
}
var_dump(fahrenheit_to_celsius(97.88));