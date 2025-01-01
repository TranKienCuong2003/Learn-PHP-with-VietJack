<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuyển đổi giây thành ngày, giờ, phút, giây</title>
</head>
<body>
    <?php
        function convertSeconds($seconds) {
            $days = floor($seconds / 86400);
            $seconds %= 86400;
            $hours = floor($seconds / 3600);
            $seconds %= 3600;
            $minutes = floor($seconds / 60);
            $seconds %= 60;

            return "$days ngày, $hours giờ, $minutes phút, $seconds giây";
        }

        $totalSeconds = 123456789;
        echo "$totalSeconds giây tương đương với: " . convertSeconds($totalSeconds);
    ?>
</body>
</html>
