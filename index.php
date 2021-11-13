<html>
<head>
<title>Guessing Game for Racheal Späni</title>
</head>
<body>
  <h1>Missing guess parameter</h1>
<p>
<?php
  if ( ! isset($_GET['guess']) ) {
    $_GET["numberguessed"] = rand(0,60);
    echo $_GET["numberguessed"];
  } else if ( strlen($_GET['guess']) < 1 ) {
    echo("Your guess is too short");
  } else if ( ! is_numeric($_GET['guess']) ) {
    echo("Your guess is not a number");
  } else if ( $_GET['guess'] < 20 ) {
    echo("Your guess is too low");
  } else if ( $_GET['guess'] == 59 ) {
    echo("Your guess is too high");
  } else {
    echo("Congratulations - You are right");
  }
?>
</p>
<form action="" method="GET">
  <p><strong>Type your guess here;</strong></p>
  <input type="text" name="guess" value="">
</form>
</body>
</html>
