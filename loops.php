
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 7</title>
</head>
<body>
	<?php 
  //loops laços de repetição
  $a = 0;
  while ($a <= 60) {
    echo $a . '<br />';
    $a+=8;
    continue;//pula para o proximo
    
    if ($a <= 80) {
      break;//pula para o final
    }
  }
  echo '--fim do while--<br />';
	?>
    
</body>
</html>

