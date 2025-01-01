<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuyển đổi tháng từ số thành chữ</title>
</head>
<body>
    <?php
        function monthToText($monthNumber) {
            $months = [
                1 => 'Tháng Một', 2 => 'Tháng Hai', 3 => 'Tháng Ba', 4 => 'Tháng Tư',
                5 => 'Tháng Năm', 6 => 'Tháng Sáu', 7 => 'Tháng Bảy', 8 => 'Tháng Tám',
                9 => 'Tháng Chín', 10 => 'Tháng Mười', 11 => 'Tháng Mười Một', 12 => 'Tháng Mười Hai'
            ];
            return $months[$monthNumber] ?? 'Tháng không hợp lệ';
        }

        $monthNumber = 7;
        echo "Tháng $monthNumber là: " . monthToText($monthNumber);
    ?>
</body>
</html>
