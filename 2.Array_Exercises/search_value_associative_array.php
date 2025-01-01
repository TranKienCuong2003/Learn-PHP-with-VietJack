<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm Giá Trị Trong Mảng Liên Hợp</title>
</head>
<body>
    <h2>Tìm Giá Trị Trong Mảng Liên Hợp</h2>
    <?php
    $array = [
        "apple" => 10,
        "banana" => 25,
        "cherry" => 5,
        "orange" => 30,
        "grape" => 15
    ];

    $search_value = 25;

    $key = array_search($search_value, $array);

    if ($key !== false) {
        echo "<p>Giá trị $search_value được tìm thấy với key: $key</p>";
    } else {
        echo "<p>Giá trị $search_value không có trong mảng.</p>";
    }
    ?>
</body>
</html>
