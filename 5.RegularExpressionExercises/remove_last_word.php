<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa từ cuối cùng</title>
</head>
<body>
    <?php
        function removeLastWord($str) {
            if (str_word_count($str) > 1) {
                return preg_replace('/\s+\S+$/', '', $str);
            } else {
                return $str;
            }
        }

        if (isset($_GET['string'])) {
            $string = $_GET['string'];
            $result = removeLastWord($string);
            echo "Chuỗi ban đầu: $string <br>";
            echo "Chuỗi sau khi xóa từ cuối: $result";
        }
    ?>

    <form method="get">
        <label for="string">Nhập một chuỗi:</label>
        <input type="text" name="string" id="string" required><br><br>
        <input type="submit" value="Xóa từ cuối cùng">
    </form>
</body>
</html>
