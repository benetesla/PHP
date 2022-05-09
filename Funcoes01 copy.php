
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 7</title>
</head>
<body>
	<?php
    //void esta é uma funcao vazia
   function exibir(){
       echo 'Bem vindo aos estudos de PHP <br />';
   }
   exibir();
   
   //funcao com retorno
   function calcularTerreno($largura, $comprimento){
    $area = $largura * $comprimento;
    return $area;
   }
$resultado = calcularTerreno(80,80);
echo $resultado
   ?>
</body>
</html>