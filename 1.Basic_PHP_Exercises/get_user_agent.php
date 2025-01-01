<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lấy thông tin User Agent trong PHP</title>
</head>
<body>
    <?php
        $user_agent = $_SERVER['HTTP_USER_AGENT'];

        echo "Thông tin User Agent của bạn: " . $user_agent;
    ?>
</body>
</html>