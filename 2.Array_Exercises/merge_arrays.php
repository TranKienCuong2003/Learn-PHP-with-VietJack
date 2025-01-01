<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hợp Hai Mảng</title>
</head>
<body>
    <h2>Hợp Hai Mảng</h2>
    <?php
    $array1 = ["apple", "banana", "cherry"];
    $array2 = ["orange", "grape", "kiwi"];

    $merged_array = array_merge($array1, $array2);

    echo "<p>Mảng sau khi hợp:</p>";
    echo "<ul>";
    foreach ($merged_array as $item) {
        echo "<li>$item</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
