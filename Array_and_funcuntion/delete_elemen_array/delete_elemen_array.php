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
<form method="post">
    <input type="text" name="fuck" >
</form>
<?php
if($_SERVER['REQUEST_METHOD']== "POST") {
    $x = $_REQUEST['fuck'];

    $arr = [4, 2334, 45, 464, 41, 23, 32, 235, 235];
    function delete($arr, $x)
    {
        $i = 0;
        while ($i < count($arr)) {
            if ($arr[$i] == $x) {
                array_splice($arr, $i, 1);
            }
            $i++;
        }
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
    }

    delete($arr, $x);
}
?>
</body>
</html>

