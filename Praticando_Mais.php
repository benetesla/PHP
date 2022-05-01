
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 7</title>
</head>
<body>
	<?php
    $usuario_possui_cartao_loja = true;
    $Valor_Compra = 50;

    $Valor_Frete = 50;

$recebe_Desconto_Frete = true;

if ( $usuario_possui_cartao_loja  &&  $Valor_Compra >= 180 ) {
    $Valor_Frete= 0;
   
} else if ($usuario_possui_cartao_loja  &&  $Valor_Compra >= 300) {
    $Valor_Frete = 10;
    
}
else if ($usuario_possui_cartao_loja  &&  $Valor_Compra >= 350) {
    $Valor_Frete = 15;
    
} else {
    $recebe_Desconto_Frete= false;
}

	?>
    <h1>Detalhes do pedido</h1>
<p> Possui cartao da loja? <?= $usuario_possui_cartao_loja ? 'SIM' : 'Nao '; ?>
<?php
//opeardores ternarios condição 
#$teste = $recebe_Desconto_Frete ? 'SIM' : 'NÃO';
//echo $teste;
/*
if ($usuario_possui_cartao_loja) {
    echo 'SIM';
}
else {
    echo 'Não';
}*/

?>
</p>
<p> Valor da compra: <?= $Valor_Compra ?></p>
<p> Recebeu desconto no frete? 
<?php

if ($recebe_Desconto_Frete) {
    echo 'SIM';
}
else {
    echo 'Não';
}
?>
</p>
<p> Valor do frete: <?= $Valor_Frete ?></p>

</body>
</html>