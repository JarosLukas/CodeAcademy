<?php
// Parašykite funkciją, kuri mestų kauliuką iki kol iškris 5 arba 6. Visus savo metimus išvestų į ekrana.(while).
// https://www.codecademy.com/forum_questions/5160194aa66544e30e002454

$rollCount = 0;
do {
    $roll = rand(1,6);
    $rollCount ++;
    if ($roll != 6){
        echo '<p> Išriedėjo ' . $roll . '</p>';
    }
    else {
        echo 'Pagaliau iškrito ' . $roll ;
    }
} while ($roll != 6);
$verb = 'Bandymų';
$last = 'škaičius';

echo "<p>{$verb} {$last} {$rollCount}!</p>";
echo '<hr>';

// Papildomas funkcionalumas žaidimui(papildomas sudėtingumas):
// Metame 2 kauliukus (arba vieną kauliuką 2 kartus).
	// taisyklės:
	// Jeigu kauliukų suma yra mažiau už 5 reiškia - jūs iškarto pralaimejote.
	// Jeigu kauliukų suma daugiau už 5 ir:
	// Išmesta buvo 6 ir 6, reiškia - laimėjote dviratį.
	// Abiejų kauliukų išmestas skaičius yra vienodas, bet ne 6 ir 6 - reiškia jūs laimėjote bilietą į kiną.
	// Kitais atvejais – kauliukas metamas dar kartą.
	
// Žaidimas turi vykti iki kol žaidėjas laimės / pralaimės(while)
	
// Visa žaidimo eiga turėtų būti išvesta į ekraną.


function rollDice()
{
        $dice1roll = rand(1, 6);
        $dice2roll = rand(1, 6);
        $sum = $dice1roll + $dice2roll;

        if ($sum > 5 && $dice1roll === $dice2roll && $dice1roll !== 6 && $dice2roll !==6) {
            echo 'Jūs laimėjote BILIETĄ Į KINĄ! Išriedėjo ' .$dice1roll .' ir ' .$dice2roll;
        }
        elseif ($dice1roll === 6 && $dice2roll === 6) {
            echo 'Laimėjote DVIRATĮ! Išriedėjo ' .$dice1roll .' ir ' .$dice2roll;
        }
        elseif ($sum > 5 && $sum <= 11) {
            echo 'Bandykite dar kartą! Išriedėjo ' .$dice1roll .' ir ' .$dice2roll;

            return rollDice();
        }
        else {
            echo 'PRALAIMĖJOTE! Išriedėjo ' .$dice1roll .' ir ' .$dice2roll;
        }
}
rollDice();