<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
  <form class="row g-3" action="" method="$_GET">
    <div class="col-auto">
      <input type="text" readonly class="form-control-plaintext" value="Enter temperature ==>">
    </div>
    <div class="col-auto">
      <input type="text" class="form-control" name="fahrenheit" id="fahrenheit" placeholder="fahrenheit">
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-3">Convert to Celsius</button>
    </div>
  </form>

<?php

if (isset($_GET['fahrenheit']) && is_numeric($_GET['fahrenheit'])) {

function fahrenheit_to_celsius($fahrenheit)
{
	return 5/9 * ($fahrenheit-32);
}
echo fahrenheit_to_celsius($_GET['fahrenheit']) .' of Celsius.';
}

else {                          // ar gerai "else" deti po funkcijos? Nes jei tarp "funkcijos" ir "if" mete klaida.
  echo 'Please enter number!';
}

?>

</body>
</html>