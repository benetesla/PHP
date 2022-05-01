
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 7</title>
</head>
<body>
	<?php
    //operadores logicos
    //E: && or AND -> retorna verdadeiro se todos os resultados das experiencias forem verdadeiras
    //OU:|| ou OR -> retornar verdadeiro se pelo menos um  dos resultados das expressoes for verdadeiros
    // XOR : XOR se uma das expressoes forem verdadeiras retorna verdadeiro se as duas expressoes forem falsas ou verdadeiras este retornara o resultado falso
    // ! -> inverter o resultado retornando pela expressão
//()estabeler precedencia 

    if (!( 5 == 3 xor 10 > 10)) {
        echo 'verdadeiro';
    }
    else {
        echo   'Falso';
    }
	?>
</body>
</html>