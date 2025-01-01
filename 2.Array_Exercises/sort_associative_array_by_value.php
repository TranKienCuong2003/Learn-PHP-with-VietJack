<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sắp Xếp Mảng Liên Hợp Theo Giá Trị</title>
</head>
<body>
    <h2>Sắp Xếp Mảng Liên Hợp Theo Giá Trị (Không Phân Biệt Kiểu Chữ)</h2>
    <?php
    $array = [
        "apple" => "10",
        "banana" => "25",
        "cherry" => "5",
        "orange" => "30",
        "grape" => "15"
    ];

    asort($array, SORT_STRING);

    echo "<p>Mảng sau khi sắp xếp theo giá trị (không phân biệt kiểu chữ):</p>";
    echo "<ul>";
    foreach ($array as $key => $value) {
        echo "<li>$key => $value</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
