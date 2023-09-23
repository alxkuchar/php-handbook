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
    <form action="mathematical-functions.php" method="post">
        <label>radius:</label>
        <input type="text" name="radius" />
        <input type="submit" value="Calculate" />
    </form><br>
</body>
</html>

<?php
    $radius = $_POST["radius"];
    $circumference = null;
    $area = null;
    $volume = null;

    $circumference = 2 * pi() * $radius;
    $circumference = round($circumference, 2);

    $area = pi() * pow($radius, 2);
    $area = round($area, 2);

    $volume = 4/3 * pi() * pow($radius, 3);
    $volume = round($volume, 2);

    echo "Circumference = {$circumference}cm<br>";
    echo "Area = {$area}cm²<br>";
    echo "Volume = {$volume}cm³<br>";

    // $x = $_POST["x"];
    // $y = $_POST["y"];
    // $z = $_POST["z"];
    // $total = null;

    // $total = abs($x); // get the absolute number
    // $total = round($x); // round a number
    // $total = floor($x); // always round down
    // $total = ceil($x); // always round up
    // $total = sqrt($x);
    // $total = pow($x, $y);
    // $total = max($x, $y, $z);
    // $total = min($x, $y, $z);
    // $total = pi();
    // $total = rand(1, 6);

    // echo $total;