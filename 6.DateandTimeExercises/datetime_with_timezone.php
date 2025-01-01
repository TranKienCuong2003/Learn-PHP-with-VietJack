<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ngày giờ theo Timezone cụ thể</title>
</head>
<body>
    <?php
        $timezone = new DateTimeZone('Asia/Ho_Chi_Minh');
        $datetime = new DateTime('now', $timezone);
        echo "Ngày giờ hiện tại tại timezone 'Asia/Ho_Chi_Minh' là: " . $datetime->format('Y-m-d H:i:s');
    ?>
</body>
</html>
