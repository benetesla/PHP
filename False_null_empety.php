
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 7</title>
</head>
<body>
	<?php
    //false (true/false) - tipo variavel boolean
    //null e empety - tipo de varialvel especial
    $funconario1 = null;
    $funconario2 = '';
//valores null
    if (is_null($funconario1)){
        
        echo 'A variável é nula';
    }
    else {
        echo 'A variável não é nula';
    }
    echo '<hr />';
    echo '<br />';
    //valores empety
    if (empty($funconario2)){
        
        echo 'A variável é vazia';
    }
    else {
        echo 'A variável não esta vazia';
    }
   ?>
</body>
</html>