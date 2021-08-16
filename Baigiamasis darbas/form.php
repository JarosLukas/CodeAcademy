<?php

require_once 'index.php';

$msg = '';
$msgClass = '';

if (filter_has_var(INPUT_POST, 'submit')) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    if (!empty($email) && !empty($name) && !empty($message)) {
        
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $msg = 'Prašau įveskite teisingą elektroninį adresą';
            $msgClass = 'alert-danger';
        } else {
            $myfile = fopen("newfile.txt", "a");
            $txt = "Vardas - " .$name ."\n". "Emailas - " .$email ."\n". "Žinutė - " .$message. "\n";
            fwrite($myfile, $txt);
            fclose($myfile);

            $msg = 'Jūsų žinutė buvo išsiųsta';
            $msgClass = 'alert-success';

            $name = $email = $message = '';
        }
    } else {
        $msg = 'Užpildykite visus langelius';
        $msgClass = 'alert-danger';
    }
    
}