<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decode JSON</title>
</head>
<body>
    <h2>Decode Một Chuỗi JSON</h2>
    <?php
    $json_string = '{"name": "Kien Cuong", "age": 21, "city": "Ha Noi"}';
    $decoded_data = json_decode($json_string, true);
    
    echo "<p>Name: " . $decoded_data['name'] . "</p>";
    echo "<p>Age: " . $decoded_data['age'] . "</p>";
    echo "<p>City: " . $decoded_data['city'] . "</p>";
    ?>
</body>
</html>
