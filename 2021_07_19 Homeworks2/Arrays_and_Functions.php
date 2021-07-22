<?php

// Mayvai
// Sukurti skirtingų skaičių masyvą. Sekančias užduotis atlikti su naujomis masyvo kopijomis.
$arr = [1, -2, 3, -4, 5];

var_dump($arr);

// Padauginti esamo masyvo narius iš 2
function multiply($arr) {
    
    foreach ($arr as $value) {
        $result[] = $value * 2;
    }

    return $result;
};

var_dump(multiply($arr));

// Pakelti masyvo narius kvadratu
function squareArray($arr) {

    foreach ($arr as $value) {
        $result[] = $value ** 2;
    }

    return $result;
};

var_dump(squareArray($arr));

// Padauginti masyvo narius iš jų index'o
function multiplyArrayAndKey($arr) {

    foreach ($arr as $key => $value) {
        $value = $key * $value;
        $result[] = $value;
    }

    return $result;
};

var_dump(multiplyArrayAndKey($arr));

// Atrinkti tiktai teigimų elementų masyvą
function positiveArray($arr) {

    foreach ($arr as $value) {
        if($value >= 0) {
            $result[] = $value;
        }
    }

    return $result;
};

var_dump(positiveArray($arr));

// Atrinkti tiktai neigiamų elementų masyvą
function negativeArray($arr) {

    foreach ($arr as $value) {
        if($value < 0) {
          $result[] = $value;
        }
    }

    return $result;
};

var_dump(negativeArray($arr));

// Atrinkti tiktai lyginių skaičių masyvą
function evenArray($arr) {

    foreach ($arr as $value) {
        if($value % 2 == 0) {
          $result[] = $value;
        }
    }

    return $result;
};

var_dump(evenArray($arr));

// Atrinkti tiktai nelyginių skaičių masyvą
function oddArray($arr) {

    foreach ($arr as $value) {
        if($value & 1) {
          $result[] = $value;
        }
    }

    return $result;
};

var_dump(oddArray($arr));

// Asociatyvūs masyvai
// Sukurti masyvą, kuris aprašytų knygos duomenis: title, author, year, genre
$book = [
    'title',
    'author',
    'year',
    'genre'];

// Sukurti masyvą, kurio elementai būtų masyvai aprašantys knygas

$book = [
    'title' => [
        'Around the World',
        'Protėvių šauksmas',
        'PHP & MySQL: Server-side Web Development'
    ],
    'author' => [
        'Matt Phelan',
        'Jack London',
        'Jon Duckett'
    ],
    'year' => [
        '2011',
        '1903',
        '2018'
    ],
    'genre' => [
        'adventure',
        'adventure romance',
        'programming'
    ]
];

// Išvesti visus knygų masyvo elementus su var_dump;
var_dump($book);

// Išvesti visus knygų masyvo elementus lentele;
// https://stackoverflow.com/questions/4746079/how-to-create-a-html-table-from-a-php-array
function array2Html($book, $table = true)
{
    $out = '';
    foreach ($book as $key => $value) {
        if (is_array($value)) {
            if (!isset($tableHeader)) {
                $tableHeader =
                    '<th>' .
                    implode('</th><th>', array_keys($value)) .
                    '</th>';
            }
            array_keys($value);
            $out .= '<tr>';
            $out .= array2Html($value, false);
            $out .= '</tr>';
        } else {
            $out .= "<td>$value</td>";
        }
    }

    if ($table) {
        return '<table>' . $tableHeader . $out . '</table>';
    } else {
        return $out;
    }
}
var_dump(array2Html($book));

// Išvesti visų visų knygų metų vidurkį;
$average = array_sum($book['year'])/count($book['year']);

var_dump($average);

// Funkcijos
// Sukurti funkciją, kuri ima masyvą ir grąžina didžiausią skaičių masyve.

function largest($arr)
{
    return max($arr);
};

var_dump(largest($arr));

// Sukurti funkciją, kuri ima masyvą ir grąžina mažiausią skaičių masyve.
function smallest($arr)
{
    return min($arr);
};

var_dump(smallest($arr));

// Sukurti funkciją, kuri ima masyvą ir išrikiuja jo elementus nuo mažiausio iki didžiausio ir grąžina tą masyvą.
function minMax($arr)
{
    sort($arr);
    return $arr;
};

var_dump(minMax($arr));