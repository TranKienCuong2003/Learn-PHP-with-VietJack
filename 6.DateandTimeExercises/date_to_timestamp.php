<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuyển đổi Date thành Timestamp</title>
</head>
<body>
    <?php
        $date = '2025-01-01';
        $timestamp = strtotime($date);
        echo "Timestamp của ngày $date là: " . $timestamp;
    ?>
</body>
</html>
