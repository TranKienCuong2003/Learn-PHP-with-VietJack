<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm tra ngày cuối tuần</title>
</head>
<body>
    <?php
        function isWeekend($date) {
            $dayOfWeek = date('N', strtotime($date));
            return ($dayOfWeek == 6 || $dayOfWeek == 7);
        }

        $date = '2025-01-05';
        if (isWeekend($date)) {
            echo "$date là ngày cuối tuần.";
        } else {
            echo "$date không phải là ngày cuối tuần.";
        }
    ?>
</body>
</html>
