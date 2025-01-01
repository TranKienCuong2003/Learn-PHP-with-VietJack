<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lấy Key Của Giá Trị Lớn Nhất Trong Mảng Liên Hợp</title>
</head>
<body>
    <h2>Lấy Key Của Giá Trị Lớn Nhất Trong Mảng Liên Hợp</h2>
    <?php
    $array = [
        "apple" => 10,
        "banana" => 25,
        "cherry" => 5,
        "orange" => 30,
        "grape" => 15
    ];

    $max_key = array_search(max($array), $array);

    echo "<p>Key của giá trị lớn nhất là: $max_key</p>";
    ?>
</body>
</html>
