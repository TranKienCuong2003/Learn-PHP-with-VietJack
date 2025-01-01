<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính tổng dãy số</title>
</head>
<body>
    <?php
        $sum = 0;
        for ($i = 1; $i <= 20; $i++) {
            $sum += $i;
        }
        echo "Tổng dãy số từ 1 đến 20 là: " . $sum;
    ?>
</body>
</html>
