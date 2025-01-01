<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm tra chuỗi Palindrome</title>
</head>
<body>
    <?php
        function isPalindrome($str) {
            $str = strtolower(preg_replace("/[^a-z0-9]/i", "", $str));
            return $str === strrev($str);
        }

        if (isset($_GET['input'])) {
            $input = $_GET['input'];
            if (isPalindrome($input)) {
                echo "Chuỗi '$input' là chuỗi Palindrome.";
            } else {
                echo "Chuỗi '$input' không phải là chuỗi Palindrome.";
            }
        }
    ?>

    <form method="get">
        <label for="input">Nhập một chuỗi hoặc số:</label>
        <input type="text" name="input" id="input" required><br><br>
        <input type="submit" value="Kiểm tra">
    </form>
</body>
</html>
