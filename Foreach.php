
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 7</title>
</head>
<body>
	<?php
  //loops foreach - loop foreach é mais eficiente que o while
  echo '<h1>loops foreach</h1>';
  echo'<pre>';
  $itens = array('Notebook', 'Mouse', 'Teclado', 'Monitor', 'Impressora', 'Scanner', 'Cadeira', 'Mesa', 'Toalha', 'Colcha',);
  print_r($itens);
  foreach ($itens as $item) {
    echo $item . '<br />';
    if ($item == 'Impressora') {
        echo '(Compre uma impressora e ganhe 10% de desconto)';
    }
    echo '<br />';
  }

   ?>
</body>
</html>