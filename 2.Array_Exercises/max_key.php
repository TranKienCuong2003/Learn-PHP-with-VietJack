<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm Key Lớn Nhất Trong Mảng</title>
</head>
<body>
    <h2>Tìm Key Lớn Nhất Trong Mảng</h2>
    <?php
    $array = [1 => "apple", 5 => "banana", 3 => "cherry", 8 => "kiwi", 6 => "grape"];

    $max_key = max(array_keys($array));

    echo "<p>Key lớn nhất trong mảng là: $max_key</p>";
    ?>
</body>
</html>
