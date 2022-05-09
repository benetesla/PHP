
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 7</title>
</head>
<body>
	<?php
  $funcionarios = array(
      array ('nome' => 'João', 'salario' => 1800, 'cargo' => 'Programador'),
        array ('nome' => 'Maria', 'salario' => 2000, 'cargo' => 'Analista'),
        array ('nome' => 'Pedro', 'salario' => 3000, 'cargo' => 'Gerente'),
        array ('nome' => 'Joana', 'salario' => 4000, 'cargo' =>'Desenvolvedor'),
        array ('nome' => 'José', 'salario' => 5000, 'cargo' => 'Programador'),
  );

  echo '<pre>';
  print_r($funcionarios);
    echo '</pre>';
    
  foreach ($funcionarios as $idx => $nome_funcionario) {
    echo '<pre>';
      print_r($nome_funcionario);
    echo '</pre>';
    echo '<hr />';
           echo '<pre>';
               echo '<h1>Funcionário: ' . $nome_funcionario['nome'] . '</h1>';     
                echo '<h2>Salário: ' . $nome_funcionario['salario'] . '</h2>';
                echo '<h2>Cargo: ' . $nome_funcionario['cargo'] . '</h2>';
              echo '</pre>';
                echo '<hr />';

  }
   ?>
</body>
</html>