<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lấy 3 kí tự cuối</title>
</head>
<body>
    <?php
        $string = "HelloWorld";
        $lastThreeCharacters = substr($string, -3);
        echo "3 kí tự cuối của chuỗi '$string' là: $lastThreeCharacters";
    ?>
</body>
</html>
