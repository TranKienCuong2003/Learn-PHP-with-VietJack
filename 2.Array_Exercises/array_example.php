<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mảng Các Màu</title>
</head>
<body>
    <h2>Mảng Các Màu</h2>
    <?php
    $colors = ["white", "green", "red", "blue", "black"];
    
    echo "<ul>";
    foreach ($colors as $color) {
        echo "<li>$color</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
