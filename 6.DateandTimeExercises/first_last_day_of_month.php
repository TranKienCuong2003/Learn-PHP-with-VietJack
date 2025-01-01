<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ngày đầu tiên và ngày cuối cùng của tháng</title>
</head>
<body>
    <?php
        $date = '2025-01-01';
        $firstDay = new DateTime($date);
        $firstDay->modify('first day of this month');
        
        $lastDay = new DateTime($date);
        $lastDay->modify('last day of this month');
        
        echo "Ngày đầu tiên của tháng: " . $firstDay->format('Y-m-d') . "<br>";
        echo "Ngày cuối cùng của tháng: " . $lastDay->format('Y-m-d');
    ?>
</body>
</html>
