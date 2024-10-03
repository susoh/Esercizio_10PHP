<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $size = 20;
        $num = 5;
        for ($i = 0; $i<$num; $i++){
        echo "<p style='font-size: {$size}px;'>QUESTO E' UN PARAGRAFO</p>";
        $size = $size + 2;
        }
    ?>
</body>
</html>