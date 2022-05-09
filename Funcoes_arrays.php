
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 7</title>
</head>
<body>
	<?php
  //is_array() => verifica se é um array
   $array = array(
   		'nome' => 'João',
   		'idade' => 20,
   		'peso' => 80.5
   );
   $retorno = is_array($array);
   if ($retorno){
    echo 'É um array';
   } else {
     echo 'Não é um array';
   }
   //Array_keys() => retorna um array com as chaves do array
   $chave = [25 => 'nome', 23=>'idade', 35 => 'peso'];
   echo '<pre>';
      print_r($chave);
    echo '<pre>';

   $array = array(
   		'nome' => 'João',
   		'idade' => 20,
   		'peso' => 80.5,
       'Mouse' => 'Razer',
        'Teclado' => 'Logitech',
        'Monitor' => 'LG',
        'Impressora' => 'HP',
        'Notebook' => 'Dell',
        'Celular' => 'Motorola',
        'Tablet' => 'Samsung',
        'Computador' => 'Lenovo',
   );
   echo '<pre>';
   print_r($array);
   echo '<pre>';
   asort ($array);//ordena o  array
   echo '<pre>';
   print_r($array);
   echo '<pre>';
   echo '<hr />';
   //asort  preserva os indices
   $array = array(
   		'nome' => 'João',
   		'idade' => 20,
   		'peso' => 80.5,
       'Mouse' => 'Razer',
        'Teclado' => 'Logitech',
        'Monitor' => 'LG',
        'Impressora' => 'HP',
        'Notebook' => 'Dell',
        'Celular' => 'Motorola',
        'Tablet' => 'Samsung',
        'Computador' => 'Lenovo',
   );
   echo '<pre>';
   print_r($array);
   echo '<pre>';
   asort ($array);//ordena o  array
   echo '<pre>';
   print_r($array);
   echo '<pre>';
   echo '<hr />';
   //count -> conta o numero de elementos do array
    $array = array(
   		'nome' => 'João',
   		'idade' => 20,
   		'peso' => 80.5,
       'Mouse' => 'Razer',
        'Teclado' => 'Logitech',
        'Monitor' => 'LG',
        'Impressora' => 'HP',
        'Notebook' => 'Dell',
        'Celular' => 'Motorola',
        'Tablet' => 'Samsung',
        'Computador' => 'Lenovo',
   );
   echo '<pre>';
   print_r($array);
   echo count($array);
   echo '<pre>';
   //array_merge -> junta dois arrays
   echo '<hr />';
   $array1 = ['windows', 'mac'];
   $array2 =  array('linux', );
    $array3 = ['Ubuntu', 'Debian'];
    $novo = array_merge($array1, $array2, $array3);
    echo '<pre>';
    print_r($novo);
    echo '<pre>';

    //explode -> transforma uma string em um array
    $string = '26/10/2022';
    $array = explode('/', $string);
    echo '<pre>';
    echo $string;
    print_r($array);
    echo $array[0]. '-' .$array[1]. '-' .$array[2];
    echo '<pre>';
    echo '<hr />';
    //implode -> junta um array em uma string
    $array = [ 'a', 'b', 'c','x', 'y', 'z'];
    $string = implode('/', $array);
    echo '<pre>';
    echo $string;
    echo '<pre>';

   ?>
</body>
</html>