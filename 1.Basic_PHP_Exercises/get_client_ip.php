<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lấy địa chỉ Client IP trong PHP</title>
</head>
<body>
<?php
function getClientIp() {
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } elseif (isset($_SERVER['REMOTE_ADDR'])) {
        $ip = $_SERVER['REMOTE_ADDR'];
    } else {
        $ip = 'Không thể lấy IP';
    }
    
    return $ip;
}

$client_ip = getClientIp();
echo "Địa chỉ IP của bạn là: " . $client_ip;
?>
</body>
</html>