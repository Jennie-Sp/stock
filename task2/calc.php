<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
$num1 = htmlspecialchars($_POST['num1']);
$num2 = htmlspecialchars($_POST['num2']);
$operation = htmlspecialchars($_POST['operation']);

if ($operation == '+') {
    $result = $num1 + $num2;
} elseif ($operation == '-') {
    $result = $num1 - $num2;
} elseif ($operation == '*') {
    $result = $num1 * $num2;
} elseif ($operation == '/') {
    $result = $num1 / $num2;
}

?>

<p>Ответ: <?=  $result; ?></p>

</body>
</html>


