<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm Giá Trị Nhỏ Nhất Trong Mảng</title>
</head>
<body>
    <h2>Tìm Giá Trị Nhỏ Nhất Trong Mảng (Không Phải 0)</h2>
    <?php
    $numbers = [12, 0, -5, 7, -9, 3, 0, 2];

    $non_zero_numbers = array_filter($numbers, function($value) {
        return $value != 0;
    });

    $min_value = min($non_zero_numbers);

    echo "<p>Giá trị nhỏ nhất trong mảng (không phải 0) là: $min_value</p>";
    ?>
</body>
</html>
