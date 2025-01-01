<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decode JSON</title>
</head>
<body>
    <?php
        $jsonString = '{"name": "Trần Kiên Cường", "age": 21, "city": "Hà Nội"}';
        $decodedData = json_decode($jsonString, true);

        echo "Dữ liệu đã decode:<br>";
        echo "Tên: " . $decodedData['name'] . "<br>";
        echo "Tuổi: " . $decodedData['age'] . "<br>";
        echo "Thành phố: " . $decodedData['city'];
    ?>
</body>
</html>
