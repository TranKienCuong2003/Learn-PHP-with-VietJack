<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lấy username từ email</title>
</head>
<body>
    <?php
        $email = "trankiencuong30072003@gmail.com";
        $username = strstr($email, '@', true);
        echo "Username từ email '$email' là: $username";
    ?>
</body>
</html>
