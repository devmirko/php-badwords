<?php
	
    $parola = $_GET['parola'];
	$testo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo reprehenderit, excepturi, ullam, quam aut molestiae rerum assumenda ut consequatur amet velit voluptates delectus. Quam aspernatur a maiores atque quae quibusdam?';
	$testo_replaced = str_replace($parola, '(***)', $testo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
	<label for="name">Parola</label>
	<input type="text" name="parola" id="name">
	<button>scrivi una parola da cesurare</button>
</form>
<h1>testo</h1>
<p><?= $testo_replaced ?></p>

</body>
</html>

