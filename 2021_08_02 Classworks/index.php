<?php

require_once 'user.php';

// $user = [
//     'name'    => 'Jaroslav',
//     'surname' => 'Lukasevic',
//     'age'     => '65',
//     'mail'    => 'jaroslav.lukasevic@gmail.com'
// ];

$user = new User ('Juozas','Povilaitis','65','Juozas.Povilaitis@gmail.com');

var_dump($user);