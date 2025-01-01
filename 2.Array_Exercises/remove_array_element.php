<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa Phần Tử Mảng</title>
</head>
<body>
    <h2>Xóa Phần Tử Mảng</h2>
    <?php
    $colors = ["white", "green", "red", "blue", "black"];
    
    $key = array_search("red", $colors);
    if ($key !== false) {
        unset($colors[$key]);
    }
    
    echo "<p>Mảng sau khi xóa phần tử 'red':</p>";
    echo "<ul>";
    foreach ($colors as $color) {
        echo "<li>$color</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
