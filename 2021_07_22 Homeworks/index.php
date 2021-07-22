<?php
// Išvesti į ekraną 10 kartų žodį 'Labas';
echo str_repeat('Labas ', 10), '<br>';
echo '<hr>';

// Išvesti į ekraną skaičius nuo 1 iki 10;
for ($i = 1; $i <= 10 ; $i++) { 
    echo $i, '<br>';
}
echo '<hr>';
// Išvesti į ekraną skaičius nuo 10 iki 1;
for ($a = 10; $a > 0 ; $a--) { 
    echo $a, '<br>';
}
echo '<hr>';
	
// Išvesti į ekraną visus lyginius skaičius nuo 1 iki 100;
for ($b = 0; $b <= 100 ; $b+=2) { 
    echo $b, '<br>';
}
echo '<hr>';
	
// Išvesti į ekraną visus masyvo elementus (skaičiu masyvas);
$arr = [1,2,3,4,5,6,7,8,9,10];
var_dump($arr);
echo '<hr>';
	
// Išvesti į ekraną visų masyvo elementų sumą.;
var_dump(array_sum($arr));
echo '<hr>';
	
// Išvesti į ekraną visų masyvo elementų sandaugą.;
var_dump(array_product($arr));
echo '<hr>';
	
// Išvesti į ekraną kas antrą masyvo elementą;
foreach (range(1, count($arr), 2) as $key) {
  unset($arr[$key]);
}
$arr = array_merge($arr);
var_dump($arr);
echo '<hr>';

// Funkciją, kuri apverstų masyvo elementus;
$arr = [1,2,3,4,5,6,7,8,9,10];
var_dump(array_flip($arr));
echo '<hr>';
	
// Sukurti Fibonacci seką(tai tokia seka, kuomet sekantis skaičius yra sudedamas su prieš tai einančiu.)

// https://stackoverflow.com/questions/15600041/php-fibonacci-sequence
function fibonacci($n, $first = 0, $second = 1)
{
    $fib = [$first, $second];
    for($i = 1; $i < $n; $i++)
    {
        $fib[] = $fib[$i] + $fib[$i - 1];
    }
    return $fib;
}
var_dump(fibonacci(10));
echo '<hr>';

// Išvesti visų masyvo elementų vidurkį;(foreach)

foreach ($arr as $key => $value) {
    $average = array_sum($arr)/count($arr);
}
var_dump($average);
echo '<hr>';
	
// Išvesti automobilis masyvą į ekraną; (dvilypis masyvas);
$cars = array
(
    array('Volvo', 'Saab', 'Koenigsegg'),
    array('Audi', 'BMW', 'VW'),
    array('Toyota', 'Honda', 'Nissan')
);
var_dump($cars);