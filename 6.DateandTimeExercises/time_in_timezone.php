<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiển thị thời gian theo Timezone</title>
</head>
<body>
    <?php
        function displayTimeInTimezone($timezone) {
            $datetimeZone = new DateTime('now', new DateTimeZone($timezone));
            return $datetimeZone->format('Y-m-d H:i:s');
        }

        $timezone = 'Asia/Ho_Chi_Minh';
        echo "Thời gian hiện tại ở $timezone là: " . displayTimeInTimezone($timezone);
    ?>
</body>
</html>
