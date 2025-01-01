<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cộng/Trừ ngày</title>
</head>
<body>
    <?php
        function addSubtractDays($date, $days) {
            $dateTime = new DateTime($date);
            $dateTime->modify("$days day");
            return $dateTime->format('Y-m-d');
        }

        $date = '2025-01-01';
        $daysToAdd = 10;
        $daysToSubtract = -5;

        echo "Ngày ban đầu: $date <br>";
        echo "Ngày sau khi cộng $daysToAdd ngày: " . addSubtractDays($date, $daysToAdd) . "<br>";
        echo "Ngày sau khi trừ $daysToSubtract ngày: " . addSubtractDays($date, $daysToSubtract);
    ?>
</body>
</html>
