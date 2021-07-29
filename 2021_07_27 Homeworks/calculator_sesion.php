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
            $result = $_POST['number1'] + $_POST['number2'];	
        } elseif($_POST['operation'] == 'minus')
        {
            $result = $_POST['number1'] - $_POST['number2'];	
        } elseif($_POST['operation'] == 'times')
        {
            $result = $_POST['number1'] * $_POST['number2'];	
        } elseif($_POST['operation'] == 'divided by')
        {
            $result = $_POST['number1'] / $_POST['number2'];	
        }
        
        if (isset($result)) {
            $_SESSION['result'][] = $result;
            echo "sum " .$result ."<br>\n";
        }
    
    } else {
        
        // Print error message to the browser
        echo 'Numeric values are required';
    
    }
}