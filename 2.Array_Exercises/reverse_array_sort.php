<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sắp Xếp Mảng Theo Chiều Đảo Ngược</title>
</head>
<body>
    <h2>Sắp Xếp Mảng Theo Chiều Đảo Ngược</h2>
    <?php
    $array = ["banana", "Apple", "cherry", "orange", "grape", "Mango"];

    rsort($array);

    echo "<p>Mảng sau khi sắp xếp theo chiều đảo ngược:</p>";
    echo "<ul>";
    foreach ($array as $item) {
        echo "<li>$item</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
