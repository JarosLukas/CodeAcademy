<?php

if ($_POST['password'] === $_POST['password_confirmation']) {
    var_dump($_POST);
}  elseif ($_POST['password'] !== $_POST['password_confirmation']) {
    echo'ERROR: PASSWORDS DO NOT MATCH!';
}