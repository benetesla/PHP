
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 7</title>
</head>
<body>
	<?php
    
//sequencia de numeros
$lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva', 'Abacaxi');
echo '<pre>';
var_dump($lista_frutas);
echo '<br />';
echo '<hr />';
echo '<pre>';
print_r($lista_frutas);
//associativo
echo '<pre>';
echo '<hr />';
$lista_frutas = array(
    'fruta1' => 'Banana',
    'fruta2' => 'Maçã',
    'fruta3' => 'Morango',
    'fruta4' => 'Uva',
    'fruta5' => 'Abacaxi');
    echo '<pre>';
     $lista_frutas['fruta6'] = 'Abacate';
    var_dump($lista_frutas);
    echo '<pre>';
   
  

	?>
    
</body>
</html>

