<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chèn Phần Tử Vào Mảng</title>
</head>
<body>
    <h2>Chèn Phần Tử Vào Mảng</h2>
    <?php
    $colors = ["white", "green", "red", "blue", "black"];
    
    array_splice($colors, 2, 0, "yellow");
    
    echo "<p>Mảng sau khi chèn phần tử 'yellow':</p>";
    echo "<ul>";
    foreach ($colors as $color) {
        echo "<li>$color</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
