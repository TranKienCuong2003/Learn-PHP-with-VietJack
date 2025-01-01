<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm tra ngày hợp lệ</title>
</head>
<body>
    <?php
        function isValidDate($date) {
            $d = DateTime::createFromFormat('Y-m-d', $date);
            return $d && $d->format('Y-m-d') === $date;
        }

        $date = '2025-02-29';
        if (isValidDate($date)) {
            echo "Ngày $date hợp lệ.";
        } else {
            echo "Ngày $date không hợp lệ.";
        }
    ?>
</body>
</html>
