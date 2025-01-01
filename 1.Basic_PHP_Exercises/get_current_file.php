<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lấy tên file trong PHP</title>
</head>
<body>
    <?php
        $current_file = basename($_SERVER['PHP_SELF']);

        echo "Tên file hiện tại là: " . $current_file;
    ?>
</body>
</html>