<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiply Three Numbers</title>
</head>
<body>

<?php
include "header.php";

function multiply3nums($num1,$num2,$num3=5){
    $result = $num1*$num2*$num3;
    return $result;
 }

?>
    
</body>
</html>