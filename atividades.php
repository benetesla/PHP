
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 7</title>
</head>
<body>
	<?php
    $num = array();
    while (count($num) < 10) {
        $num1[] = rand(0, 50);
        if (!in_array($num1, $num)) {
            $num[] = $num1;
        }
    }
    echo '<pre>';
    print_r($num);
    echo '<pre>';
	?>
    
</body>
</html>

