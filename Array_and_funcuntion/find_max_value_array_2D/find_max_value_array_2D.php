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
<?php

$arr = [[3,4,5],[3,5,1],[8,2,7]];
function find_max($arr)
{
    $max = $arr[0][0];
    for ($i = 0; $i < count($arr); $i++) {
        for($j = 0; $j < count($arr[$j]);$j++){
            if($arr[$i][$j]>$max){
                $max =  $arr[$i][$j];
            }
        }

    } echo "Max value is ".$max;
}
find_max($arr);
?>
</body>
</html>

