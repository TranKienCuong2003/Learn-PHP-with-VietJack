<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuyển đổi chuỗi</title>
</head>
<body>
    <?php
        $string = "chào mừng đến với PHP";

        echo "1. Chuyển đổi tất cả chữ cái thành chữ hoa: " . strtoupper($string) . "<br>";
        echo "2. Chuyển đổi tất cả chữ cái thành chữ thường: " . strtolower($string) . "<br>";
        echo "3. Chuyển đổi kí tự đầu tiên thành chữ hoa: " . ucfirst($string) . "<br>";
        echo "4. Chuyển đổi kí tự đầu tiên của tất cả các từ thành chữ hoa: " . ucwords($string) . "<br>";
    ?>
</body>
</html>
