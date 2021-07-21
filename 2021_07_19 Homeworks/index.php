<?php

// Parašykite funkciją, kuri priimtų argumentą - masyvą ir sumaišytu jo elementus atsitiktine tvarka, bet pirmą ir paskutinį paliktu vietoje.
function customShuffle($arr) {
    $first = array_shift($arr);
	$last  = array_pop($arr);
    shuffle($arr);
    array_unshift($arr, $first);
	array_push($arr, $last);
    return $arr;
};
$arr = [1,2,3,4,5];
var_dump(implode(customShuffle($arr)));

// Sukurkite masyvą $vartotojas su laukais - vardas, pavardė, amžius, paštas.(Užuomina. Asociatyvus masyvas )
$user = [
    'name'    => 'Jaroslav',
    'surname' => 'Lukasevic',
    'age'     => '74',
    'mail'
];

// Sukurkite funkciją yraPilnametis, kuri priimtų vieną parametrą - $vartotojas(masyvas iš praeitos užduoties) ir GRAŽINTU tekstą su statusu: nepilnametis, pilnametis, pensininkas.

function validateAge($user) {
    if ($user['age'] > '18' && $user['age'] < '65') {
		return sprintf($user['name']. ' yra pilnametis');
	} else if ($user['age'] < '18') {
		return sprintf($user['name']. ' yra nepilnametis');
	} else {
		return sprintf($user['name']. ' yra pensininkas');
	}
};
var_dump(validateAge($user));