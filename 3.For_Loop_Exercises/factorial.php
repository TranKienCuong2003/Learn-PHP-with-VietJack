<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính giai thừa</title>
</head>
<body>
    <?php
        if (isset($_GET['number'])) {
            $number = $_GET['number'];
            $factorial = 1;
            for ($i = 1; $i <= $number; $i++) {
                $factorial *= $i;
            }
            echo "Giai thừa của số $number là: " . $factorial;
        }
    ?>
    <form method="get">
        <label for="number">Nhập một số:</label>
        <input type="number" name="number" id="number" required>
        <input type="submit" value="Tính giai thừa">
    </form>
</body>
</html>
