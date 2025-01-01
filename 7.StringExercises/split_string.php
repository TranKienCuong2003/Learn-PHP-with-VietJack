<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chia chuỗi</title>
</head>
<body>
    <?php
        $string = "093521";
        $formattedString = substr($string, 0, 2) . ':' . substr($string, 2, 2) . ':' . substr($string, 4, 2);
        echo "Chuỗi sau khi chia: $formattedString";
    ?>
</body>
</html>
