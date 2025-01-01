<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính giai thừa</title>
</head>
<body>
    <?php
        function factorial($n) {
            if ($n == 0 || $n == 1) {
                return 1;
            }
            return $n * factorial($n - 1);
        }

        if (isset($_GET['number'])) {
            $number = $_GET['number'];
            if ($number >= 0) {
                echo "Giai thừa của số $number là: " . factorial($number);
            } else {
                echo "Vui lòng nhập một số nguyên dương.";
            }
        }
    ?>

    <form method="get">
        <label for="number">Nhập một số nguyên dương:</label>
        <input type="number" name="number" id="number" required><br><br>
        <input type="submit" value="Tính giai thừa">
    </form>
</body>
</html>
