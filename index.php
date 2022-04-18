<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once 'main.php';
    $area = getTriangleArea(8,10);
    print "三角の面積は{$area}です。";
    ?>
    </body>
</html>