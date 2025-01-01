<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thay thế từ đầu tiên</title>
</head>
<body>
    <?php
        $string = "Hello world, welcome to PHP!";
        $newString = preg_replace('/\b\w+\b/', 'Hi', $string, 1);
        echo "Chuỗi sau khi thay thế từ đầu tiên: $newString";
    ?>
</body>
</html>
