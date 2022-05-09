
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 7</title>
</head>
<body>
	<?php
    $numero = 9.999;
      echo ceil($numero);//arredonda para cima
      echo '<br />';
    echo floor($numero);//arredonda para baixo
    echo '<br />';
      echo round($numero);//arredonda para cima ou para baixo
    echo '<br />';
      echo rand(1,10);//gera um numero aleatorio
    echo '<br />';
      echo getrandmax();//retorna o maximo valor de rand
    echo '<br />';
    echo sqrt(155);//raiz quadrada
   ?>
</body>
</html>