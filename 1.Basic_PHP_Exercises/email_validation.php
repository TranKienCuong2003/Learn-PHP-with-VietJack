<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm tra Email</title>
</head>
<body>
    <h2>Kiểm tra Địa chỉ Email</h2>
    <?php
    $email = "trankiencuong30072003@gmail.com";
    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p>Email hợp lệ: $email</p>";
    } else {
        echo "<p>Email không hợp lệ: $email</p>";
    }
    ?>
</body>
</html>
