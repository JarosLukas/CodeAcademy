// Sukurkite formą su GET metodu, kurioje būtų skaičiuojama dviejų skaičių daugyba.
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        <label for="number">Pirmas skaičius:</label>
        <br>
        <input type="number" name="number1" placeholder="Įrašykite skaičių"/>
        <br>
        <label for="number">Antras skaičius:</label>
        <br>
        <input type="number" name="number2" placeholder="Įrašykite skaičių"/>
        <br>
        <button type="submit">Skaičiuoti</button>
    </form>
</body>
</html>

<?php
if (isset($_GET['number1'], $_GET['number2'])) {
	if (is_numeric($_GET['number1']) && is_numeric($_GET['number2'])) {
		echo $_GET['number1'] * $_GET['number2'], '<br>';
	} else {
		http_response_code(400);
	}
} else {
	http_response_code(400);
}

?>

// Sukurkite POST registracios formą su pakartotiniu slaptažodžiu ir BŪTINAIS duomenimis.
// Registracijos duomenis išsiųskite į kitą registracija.php failą ir juos atvaizduokite.

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Registration Form</h2>

    <form action="registration_form.php" method="POST">
        <label for="name">First name:</label>
        <br>
        <input type="text" name="firstname" id="fistname" placeholder="Your name" required>
        <br>
        <label for="name">Last name:</label>
        <br>
        <input type="text" name="lastname" id="lastname" placeholder="Your last name" required>
        <br>
        <label for="email">Email</label>
        <br>
        <input type="text" name="email" placeholder="Your email" required>
        <br>
        <label for="password">Enter password</label>
        <br>
        <input type="password" name="password" placeholder="Your password" required>
        <br>
        <label for="password">Confirm password</label>
        <br>
        <input type="password" name="password_confirmation" placeholder="Confirm password" required>
        <button type="submit" value="Submit">Submit</button>
    </form>
</body>
</html>