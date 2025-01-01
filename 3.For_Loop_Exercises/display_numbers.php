<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiển thị số</title>
</head>
<body>
    <?php
        for ($i = 1; $i <= 10; $i++) {
            echo $i;
            if ($i < 10) {
                echo "-";
            }
        }
    ?>
</body>
</html>
