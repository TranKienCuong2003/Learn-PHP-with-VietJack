<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Các Số Chia Hết Cho 4</title>
</head>
<body>
    <h2>Các Số Chia Hết Cho 4 trong Khoảng (200, 250)</h2>
    <?php
    for ($i = 201; $i < 250; $i++) {
        if ($i % 4 == 0) {
            echo "<p>$i</p>";
        }
    }
    ?>
</body>
</html>
