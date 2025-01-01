<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tam giác Floyd</title>
</head>
<body>
    <?php
        $number = 1;
        for ($i = 1; $i <= 4; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo $number . " ";
                $number++;
            }
            echo "<br>";
        }
    ?>
</body>
</html>
