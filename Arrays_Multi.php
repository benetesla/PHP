
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 7</title>
</head>
<body>
	<?php
    //array multidimensional
        $lista_coisas = array(
            'frutas' => array('Banana', 'Maçã', 'Morango', 'Uva', 'Abacaxi'),
            'cores' => array('Vermelho', 'Verde', 'Azul', 'Amarelo', 'Branco'),
            'numeros' => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10)
        );
        echo '<pre>';
        print_r($lista_coisas);
        echo '<pre>';
        print_r($lista_coisas['frutas']);
	?>
    
</body>
</html>

