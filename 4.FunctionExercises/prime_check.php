<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm tra số nguyên tố</title>
</head>
<body>
    <?php
        function isPrime($n) {
            if ($n <= 1) {
                return false;
            }
            for ($i = 2; $i <= sqrt($n); $i++) {
                if ($n % $i == 0) {
                    return false;
                }
            }
            return true;
        }

        if (isset($_GET['number'])) {
            $number = $_GET['number'];
            if (isPrime($number)) {
                echo "Số $number là số nguyên tố.";
            } else {
                echo "Số $number không phải là số nguyên tố.";
            }
        }
    ?>

    <form method="get">
        <label for="number">Nhập một số:</label>
        <input type="number" name="number" id="number" required><br><br>
        <input type="submit" value="Kiểm tra">
    </form>
</body>
</html>
