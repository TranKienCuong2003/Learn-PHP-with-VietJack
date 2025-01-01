<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sắp Xếp Mảng Theo Thứ Tự Tự Nhiên</title>
</head>
<body>
    <h2>Sắp Xếp Mảng Theo Thứ Tự Tự Nhiên (Không Phân Biệt Kiểu Chữ)</h2>
    <?php
    $array = ["baNanA", "ApPle", "cheRRy", "orAnge", "grape", "Mango"];

    natcasesort($array);

    echo "<p>Mảng sau khi sắp xếp theo thứ tự tự nhiên:</p>";
    echo "<ul>";
    foreach ($array as $item) {
        echo "<li>$item</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
