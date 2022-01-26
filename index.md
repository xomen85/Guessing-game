<html>
<head>
<title>Guessing Game for Racheal Späni</title>
<style>
body{
  background-color: #CEE3F6;
  border-style: solid;
  padding: 10em 10em 10em 30em;}
h1{
  color:#0404B4;
}
img{
  width: 80%;
}
p{
  font-size: 18px;
}
</style>
</head>
<body>
  <h1>Missing guess parameter</h1>
  <img src="https://eltlearningjourneys.com/wp-content/uploads/2019/04/guessing-game.jpg" alt="image">
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
<form action="" method="get">
  <p><strong>Type your guess here and press enter:</strong></p>
  <p><input type="text" name="guess" value="">
</form>
</body>
</html>

