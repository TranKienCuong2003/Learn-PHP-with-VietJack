<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đảo ngược chuỗi</title>
</head>
<body>
    <?php
        function reverseString($str) {
            return strrev($str);
        }

        if (isset($_GET['string'])) {
            $string = $_GET['string'];
            $reversedString = reverseString($string);
            echo "Chuỗi ban đầu: $string <br>";
            echo "Chuỗi sau khi đảo ngược: $reversedString";
        }
    ?>

    <form method="get">
        <label for="string">Nhập một chuỗi:</label>
        <input type="text" name="string" id="string" required><br><br>
        <input type="submit" value="Đảo ngược chuỗi">
    </form>
</body>
</html>
