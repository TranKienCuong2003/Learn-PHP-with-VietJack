<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thời Gian Chỉnh Sửa Lần Cuối</title>
</head>
<body>
    <h2>Thời Gian Chỉnh Sửa Lần Cuối</h2>
    <?php
    echo "<p>Trang này được chỉnh sửa lần cuối vào: " . date("d-m-Y H:i:s", filemtime(__FILE__)) . "</p>";
    ?>
</body>
</html>
