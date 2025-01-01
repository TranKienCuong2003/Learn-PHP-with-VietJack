<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính khoảng cách giữa hai ngày</title>
</head>
<body>
    <?php
        $date1 = new DateTime('2003-07-30');
        $date2 = new DateTime('2025-01-01');
        $interval = $date1->diff($date2);

        echo $interval->y . " năm, " . $interval->m . " tháng, " . $interval->d . " ngày.";
    ?>
</body>
</html>
