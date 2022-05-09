
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 7</title>
</head>
<body>
	<?php  
//array pesquisas
//in_array()
//array_search() -> retorna o indice do array procurado
$lista_frutas = array ('Banana', 'Maçã', 'Morango', 'Uva', 'Abacaxi');
echo '<pre>';
print_r($lista_frutas);
echo '<pre>';
$existe = in_array('Banana', $lista_frutas);
//caso exista o valor retorna true ou seja 1
echo array_search('Uva', $lista_frutas);
//corresponde ao indice do array
//retorno Null
echo '<br />';
if ($existe) {//true ou false
     echo 'Existe';
} else {
    echo 'Não existe';
}
echo '<hr />';
$lista_coisas = [
'Frutas' => $lista_frutas,
'pessoas' => ['Bene','Rafael']
];
echo '<pre>';
print_r($lista_coisas);
echo '<pre>';
echo in_array ('Uva', $lista_coisas ['Frutas'] )
	?>
    
</body>
</html>

