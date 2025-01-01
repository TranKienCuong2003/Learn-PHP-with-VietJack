<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sắp Xếp Mảng Liên Hợp</title>
</head>
<body>
    <h2>Sắp Xếp Mảng Liên Hợp</h2>
    <?php
    $countries = [
        "Vietnam" => "Hanoi",
        "USA" => "Washington D.C.",
        "Japan" => "Tokyo",
        "France" => "Paris",
        "Germany" => "Berlin"
    ];

    echo "<h3>Sắp xếp theo key (tăng dần):</h3>";
    ksort($countries);
    echo "<ul>";
    foreach ($countries as $country => $capital) {
        echo "<li>$country: $capital</li>";
    }
    echo "</ul>";

    echo "<h3>Sắp xếp theo key (giảm dần):</h3>";
    krsort($countries);
    echo "<ul>";
    foreach ($countries as $country => $capital) {
        echo "<li>$country: $capital</li>";
    }
    echo "</ul>";

    echo "<h3>Sắp xếp theo value (tăng dần):</h3>";
    asort($countries);
    echo "<ul>";
    foreach ($countries as $country => $capital) {
        echo "<li>$country: $capital</li>";
    }
    echo "</ul>";

    echo "<h3>Sắp xếp theo value (giảm dần):</h3>";
    arsort($countries);
    echo "<ul>";
    foreach ($countries as $country => $capital) {
        echo "<li>$country: $capital</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
