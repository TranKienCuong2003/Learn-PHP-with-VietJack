<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm tra chuỗi con</title>
</head>
<body>
    <?php
        $haystack = "Xin chào, tôi là PHP";
        $needle = "PHP";

        if (strpos($haystack, $needle) !== false) {
            echo "Chuỗi '$needle' có trong chuỗi '$haystack'.";
        } else {
            echo "Chuỗi '$needle' không có trong chuỗi '$haystack'.";
        }
    ?>
</body>
</html>
