<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đếm số ngày tới sinh nhật</title>
</head>
<body>
    <?php
        $birthDate = '2003-07-30';
        $currentDate = new DateTime();
        $nextBirthday = new DateTime($birthDate);
        $nextBirthday->setDate($currentDate->format('Y'), $nextBirthday->format('m'), $nextBirthday->format('d'));

        if ($nextBirthday < $currentDate) {
            $nextBirthday->modify('+1 year');
        }

        $interval = $currentDate->diff($nextBirthday);
        echo "Số ngày từ hôm nay tới sinh nhật kế tiếp là: " . $interval->days . " ngày.";
    ?>
</body>
</html>
