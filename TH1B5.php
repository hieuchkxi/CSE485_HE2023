<?php
$a = [
    'a' => [
    'b' => 0,
    'c' => 1
    ],
    'b' => [
    'e' => 2,
    'o' => [
    'b' => 3
    ]
    ]
   ];
   $valueB = $a['b']['o']['b'];
   $valueC = $a['a']['c'];
   $infoA = $a['a'];
   echo "Giá trị có key là 'b' là: ".$valueB. PHP_EOL;
   echo "Giá trị có key là 'c' là: ".$valueC. PHP_EOL;
   echo "Thông tin của phần tử có key là 'a': ".$infoA.PHP_EOL;
 
?>