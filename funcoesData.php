
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 7</title>
</head>
<body>
	<?php
    //recuperacao da data atual
   echo date('d/m/Y H:i:s');
   echo '<br />';
   echo time();
    echo '<br />';
 echo  date_default_timezone_set('America/Sao_Paulo');
 echo '<br />';
 date_default_timezone_get();
 //string datas
 $data_inicial = '2022-05-15';
    $data_final = '2022-06-17';
 //timestamp
 $time_inicial = strtotime ($data_inicial);
 $time_final = strtotime ($data_final);
    //calculo de datas
 echo $data_inicial . ' ' . $time_inicial;
 echo '<br />';
 echo $data_final . ' ' . $time_final;

    echo '<br />';
  $diferenca_times = abs ($time_final - $time_inicial);//abs
  echo '<br />';
    echo 'A diferença de segundos é: ' . $diferenca_times ;
    echo '<br />';
$segundos_existem_dia = 60 * 60 * 24;
echo '<br />';
echo 'Um dia tem ' . $segundos_existem_dia . ' segundos';
$diferenca_de_dias_entre_as_datas = $diferenca_times / $segundos_existem_dia;
echo '<br />';
echo 'A diferença de dias é: ' . $diferenca_de_dias_entre_as_datas;

   ?>
</body>
</html>