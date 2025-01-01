<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm Giá Trị Trung Bình, 5 Phần Tử Nhỏ Nhất và Lớn Nhất</title>
</head>
<body>
    <h2>Tìm Giá Trị Trung Bình và 5 Phần Tử Nhỏ Nhất, Lớn Nhất</h2>
    <?php
    $numbers = [12, 5, 8, 130, 44, 7, 20, 55, 3, 99, 101, 77, 50];

    $average = array_sum($numbers) / count($numbers);
    echo "<p>Giá trị trung bình của các phần tử trong mảng: $average</p>";

    sort($numbers);

    echo "<p>5 phần tử nhỏ nhất:</p>";
    echo "<ul>";
    for ($i = 0; $i < 5; $i++) {
        echo "<li>$numbers[$i]</li>";
    }
    echo "</ul>";

    echo "<p>5 phần tử lớn nhất:</p>";
    echo "<ul>";
    for ($i = count($numbers) - 5; $i < count($numbers); $i++) {
        echo "<li>$numbers[$i]</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
