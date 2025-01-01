<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ngày của ngày hôm qua</title>
</head>
<body>
    <?php
        $yesterday = new DateTime();
        $yesterday->modify('-1 day');
        echo "Ngày hôm qua là: " . $yesterday->format('Y-m-d');
    ?>
</body>
</html>
