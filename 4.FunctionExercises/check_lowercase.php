<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm tra chữ thường</title>
</head>
<body>
    <?php
        function isLowercase($str) {
            return ctype_lower($str);
        }

        if (isset($_GET['string'])) {
            $string = $_GET['string'];
            if (isLowercase($string)) {
                echo "Chuỗi '$string' chỉ chứa chữ thường.";
            } else {
                echo "Chuỗi '$string' không chỉ chứa chữ thường.";
            }
        }
    ?>

    <form method="get">
        <label for="string">Nhập một chuỗi:</label>
        <input type="text" name="string" id="string" required><br><br>
        <input type="submit" value="Kiểm tra">
    </form>
</body>
</html>
