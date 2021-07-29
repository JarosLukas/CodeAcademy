<?php

session_save_path(dirname(__FILE__)).'/calculator_sesion';
session_start();


if(isset($_POST['submit']))
{
    // Check number values
    if(is_numeric($_POST['number1']) && is_numeric($_POST['number2']))
    {
        // Calculate total
        if($_POST['operation'] == 'plus')
        {
            $_SESSION['submit'][] = $_POST['number1'] + $_POST['number2'];	
        }
        if($_POST['operation'] == 'minus')
        {
            $_SESSION['submit'][] = $_POST['number1'] - $_POST['number2'];	
        }
        if($_POST['operation'] == 'times')
        {
            $_SESSION['submit'][] = $_POST['number1'] * $_POST['number2'];	
        }
        if($_POST['operation'] == 'divided by')
        {
            $_SESSION['submit'][] = $_POST['number1'] / $_POST['number2'];	
        }
        
        // Nzn kdl gaunas 4 atsakymai is eiles???
        echo implode($_SESSION['submit']);
    
    } else {
        
        
        echo 'Numeric values are required';
    
    }
}