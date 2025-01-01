<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuyển Đổi Chữ Hoa - Chữ Thường</title>
</head>
<body>
    <h2>Chuyển Đổi Các Giá Trị Mảng Thành Chữ Hoa và Chữ Thường</h2>
    <?php
    $fruits = ["Apple", "baNana", "chErry", "daTe", "elDeRbeRrY"];

    echo "<p>Mảng ban đầu:</p>";
    echo "<ul>";
    foreach ($fruits as $fruit) {
        echo "<li>$fruit</li>";
    }
    echo "</ul>";

    $uppercase_fruits = array_map('strtoupper', $fruits);

    echo "<p>Mảng sau khi chuyển thành chữ hoa:</p>";
    echo "<ul>";
    foreach ($uppercase_fruits as $fruit) {
        echo "<li>$fruit</li>";
    }
    echo "</ul>";

    $lowercase_fruits = array_map('strtolower', $fruits);

    echo "<p>Mảng sau khi chuyển thành chữ thường:</p>";
    echo "<ul>";
    foreach ($lowercase_fruits as $fruit) {
        echo "<li>$fruit</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
