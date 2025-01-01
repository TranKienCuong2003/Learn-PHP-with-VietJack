<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm Độ Dài Ngắn/Dài Nhất của Chuỗi</title>
</head>
<body>
    <h2>Tìm Độ Dài Ngắn/Dài Nhất của Chuỗi trong Mảng</h2>
    <?php
    $strings = ["apple", "banana", "cherry", "kiwi", "grape", "watermelon"];

    $shortest = $strings[0];
    $longest = $strings[0];

    foreach ($strings as $string) {
        if (strlen($string) < strlen($shortest)) {
            $shortest = $string;
        }
        if (strlen($string) > strlen($longest)) {
            $longest = $string;
        }
    }

    echo "<p>Chuỗi ngắn nhất: $shortest (Độ dài: " . strlen($shortest) . ")</p>";
    echo "<p>Chuỗi dài nhất: $longest (Độ dài: " . strlen($longest) . ")</p>";
    ?>
</body>
</html>
