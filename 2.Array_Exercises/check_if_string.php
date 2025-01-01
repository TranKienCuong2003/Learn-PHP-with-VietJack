<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm Tra Các Giá Trị Có Phải Là Chuỗi Không</title>
</head>
<body>
    <h2>Kiểm Tra Các Giá Trị Trong Mảng Có Phải Là Chuỗi Không</h2>
    <?php
    $array = ["apple", 25, "banana", 42, "cherry", 10];

    echo "<ul>";
    foreach ($array as $value) {
        if (is_string($value)) {
            echo "<li>'$value' là một chuỗi</li>";
        } else {
            echo "<li>'$value' không phải là chuỗi</li>";
        }
    }
    echo "</ul>";
    ?>
</body>
</html>
