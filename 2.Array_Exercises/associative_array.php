<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mảng Liên Hợp Quốc Gia và Thủ Đô</title>
</head>
<body>
    <h2>Mảng Liên Hợp Quốc Gia và Thủ Đô</h2>
    <?php
    $countries_and_capitals = [
        "Vietnam" => "Hanoi",
        "USA" => "Washington D.C.",
        "Japan" => "Tokyo",
        "France" => "Paris",
        "Germany" => "Berlin"
    ];
    
    echo "<ul>";
    foreach ($countries_and_capitals as $country => $capital) {
        echo "<li><strong>$country</strong>: $capital</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
