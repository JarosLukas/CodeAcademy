<?php

require_once 'user.php';

// $user = [
//     'name'    => 'Jaroslav',
//     'surname' => 'Lukasevic',
//     'age'     => '65',
//     'mail'    => 'jaroslav.lukasevic@gmail.com'
// ];

$user = new User ('Jaroslav','Lukasevic','65','jaroslav.lukasevic@gmail.com');

var_dump($user);