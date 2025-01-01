<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuyển đổi định dạng ngày tháng</title>
</head>
<body>
    <?php
        $date = '2025-01-01';
        $formattedDate = date('d-m-Y', strtotime($date));
        echo "Ngày theo định dạng dd-mm-yyyy: " . $formattedDate;
    ?>
</body>
</html>
