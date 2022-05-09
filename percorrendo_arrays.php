
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP_Aulas</title>
</head>
<body>
	<?php

    $registro = array(
        array('titulo' => 'Titulo Noticia 1', 'conteudo' => 'Conteudo noticia 1'),
        array('titulo' => 'Titulo Noticia 2', 'conteudo' => 'Conteudo noticia 2'),
        array('titulo' => 'Titulo Noticia 3', 'conteudo' => 'Conteudo noticia 3'),
        array('titulo' => 'Titulo Noticia 4', 'conteudo' => 'Conteudo noticia 4'),
        
    );
    echo '<pre>';
    print_r($registro);
    echo '</pre>';
    echo '<br /><br /><br />';

   
   
    //count retorna o numero de elementos do array
    /*echo 'O numero de elementos do array é: ' . count($registro) . '<br />';
    echo '<br /><br /><br />';
    while ($idx < count($registro)) {
    echo   '<h1>' . $registro[$idx]['titulo'] . '</h1>';
    echo   '<p>' . $registro[$idx]['conteudo'] . '</p>';
   
    echo '<hr />';
            $idx++;
   }
   echo '<br /><br /><br />';
   do {
    echo   '<h1>' . $registro[$idx]['titulo'] . '</h1>';
    echo   '<p>' . $registro[$idx]['conteudo'] . '</p>';
    echo '<hr />';
            $idx++;
   } while ($idx < count($registro));*/
   for ( $idx = 0; $idx < count($registro) ; $idx++) { 
    echo   '<h1>' . $registro[$idx]['titulo'] . '</h1>';
    echo   '<p>' . $registro[$idx]['conteudo'] . '</p>';
    echo '<hr />';
   }
	?>
    
</body>
</html>

