<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiển thị lỗi JSON Decode</title>
</head>
<body>
    <?php
        $jsonString = '{"name": "John", "age": 30, "city": "New York"'; // Chuỗi JSON bị thiếu dấu ngoặc

        $decodedData = json_decode($jsonString);

        if (json_last_error() !== JSON_ERROR_NONE) {
            echo "Lỗi khi decode JSON: " . json_last_error_msg();
        } else {
            echo "Dữ liệu đã decode: ";
            print_r($decodedData);
        }
    ?>
</body>
</html>
