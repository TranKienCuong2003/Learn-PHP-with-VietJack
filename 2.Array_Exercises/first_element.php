<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phần Tử Đầu Tiên</title>
</head>
<body>
    <h2>Phần Tử Đầu Tiên Trong Mảng</h2>
    <?php
    $colors = ["white", "green", "red", "blue", "black"];
    echo "<p>Phần tử đầu tiên trong mảng là: " . reset($colors) . "</p>";
    ?>
</body>
</html>
