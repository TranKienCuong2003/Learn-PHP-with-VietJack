<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng Cửu chương</title>
</head>
<body>
    <?php
        echo "<table border='1' style='border-collapse: collapse;'>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 9; $j++) {
                echo "<td style='padding: 10px; text-align: center;'>$i x $j = " . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>
