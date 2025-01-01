<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa phần của chuỗi</title>
</head>
<body>
    <?php
        $string = "Hello world, welcome to PHP!";
        $partToRemove = "Hello ";

        $newString = ltrim($string, $partToRemove);
        echo "Chuỗi sau khi xóa phần bắt đầu từ đầu chuỗi: $newString";
    ?>
</body>
</html>
