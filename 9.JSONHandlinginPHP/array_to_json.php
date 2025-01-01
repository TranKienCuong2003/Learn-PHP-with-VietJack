<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mảng sang JSON</title>
</head>
<body>
    <?php
        $array = ["name" => "Tran Kien Cuong", "age" => 21, "city" => "Ha Noi"];
        $jsonData = json_encode($array);

        echo "Biểu diễn JSON của mảng: $jsonData";
    ?>
</body>
</html>
