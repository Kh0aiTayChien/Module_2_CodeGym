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
$arr = [44,53,63,41,53,72,13,4,93,23];
$i = 0;
$min = $arr[$i];
$count = 0;

while($i<count($arr)) {
    if ($arr[$i] < $min) {
        $min = $arr[$i];
    }
    $i++;
}
echo $min;
?>
</body>
</html>
<?php
