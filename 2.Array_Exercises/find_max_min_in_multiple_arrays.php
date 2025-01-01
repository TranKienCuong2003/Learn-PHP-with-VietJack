<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm Giá Trị Lớn Nhất và Nhỏ Nhất Trong Tập Hợp Các Mảng Số Nguyên</title>
</head>
<body>
    <h2>Tìm Giá Trị Lớn Nhất và Nhỏ Nhất Trong Tập Hợp Các Mảng Số Nguyên</h2>
    <?php
    $arrays = [
        [12, 45, 7, 23, 56],
        [9, 3, 5, 19, 33],
        [11, 14, 77, 21, 8],
    ];

    $max_value = PHP_INT_MIN;
    $min_value = PHP_INT_MAX;

    foreach ($arrays as $array) {
        $max_value = max($max_value, max($array));
        $min_value = min($min_value, min($array));
    }

    echo "<p>Giá trị lớn nhất trong tất cả các mảng: $max_value</p>";
    echo "<p>Giá trị nhỏ nhất trong tất cả các mảng: $min_value</p>";
    ?>
</body>
</html>
