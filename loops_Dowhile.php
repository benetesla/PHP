
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP_Aulas</title>
</head>
<body>
	<?php
    
    $a = 0;
  do {
     
      echo '$a = ' . $a . '<br />';
        $a++;
  } while ($a < 15);

  echo '--fim do while--<br />';

  while ($a <= 30) {
     echo '$a = ' . $a . '<br />';
        $a++;
  }
	?>
    
</body>
</html>

