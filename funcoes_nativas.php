
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 7</title>
</head>
<body>
	<?php
    $texto = 'Aulas de PHP';
    //string do lower
    echo $texto .'<br />';
    echo strtolower($texto);
    echo '<hr />';
    //string do upper
    echo $texto .'<br />';
    echo strtoupper($texto);
     echo '<hr />';
    //upper case first
    echo $texto .'<br />';
    echo ucfirst($texto);
    echo '<hr />';
    //string len
    echo $texto .'<br />';
    echo strlen($texto);
    echo '<hr />';
    //string replace
    echo $texto .'<br />';
    echo str_replace('PHP', 'JAVA', $texto);
    echo '<hr />';
    //string substr
    echo $texto .'<br />';
    echo substr($texto, 0,9);
   ?>
</body>
</html>