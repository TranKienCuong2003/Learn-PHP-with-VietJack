<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm Tra Giao Thức</title>
</head>
<body>
    <h2>Kiểm Tra Giao Thức (HTTP hay HTTPS)</h2>
    <?php
        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
            echo "<p>Trang này được gọi từ <strong>HTTPS</strong>.</p>";
        } else {
            echo "<p>Trang này được gọi từ <strong>HTTP</strong>.</p>";
        }
    ?>
</body>
</html>
