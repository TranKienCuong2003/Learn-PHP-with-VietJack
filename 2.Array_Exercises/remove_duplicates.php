<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa Bản Sao Giá Trị Trong Mảng</title>
</head>
<body>
    <h2>Xóa Bản Sao Giá Trị Trong Mảng</h2>
    <?php
    $array = ["apple", "banana", "cherry", "apple", "grape", "banana", "kiwi"];

    $unique_array = array_unique($array);

    echo "<p>Mảng sau khi xóa bản sao giá trị:</p>";
    echo "<ul>";
    foreach ($unique_array as $item) {
        echo "<li>$item</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
