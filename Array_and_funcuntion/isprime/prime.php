<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST">
<input type="text" name="prime" placeholder="Nhap so vao day">
</form>



<?php

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $number=$_POST["prime"];
    $count=0;
    $N=0;

    while ($count<$number){
        if (isNumber($N)){
            echo " Number ".$N."la so nguyen to <br>";
            $count++;
        }
        $N++;
    }
}

function isNumber($number){

    if ($number<2){
        return false;
    }
    for ($i=2;$i<$number;$i++){
        if ($number%$i==0){
            return false;
        }
    }
    return true;
}
?>
</body>
</html>