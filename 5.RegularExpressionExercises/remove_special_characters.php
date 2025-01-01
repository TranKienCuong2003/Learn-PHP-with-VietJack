<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa ký tự đặc biệt</title>
</head>
<body>
    <?php
        function removeSpecialCharacters($str) {
            return preg_replace('/[^a-zA-Z0-9 ]/', '', $str);
        }

        if (isset($_GET['string'])) {
            $string = $_GET['string'];
            $result = removeSpecialCharacters($string);
            echo "Chuỗi ban đầu: $string <br>";
            echo "Chuỗi sau khi xóa ký tự đặc biệt: $result";
        }
    ?>

    <form method="get">
        <label for="string">Nhập một chuỗi:</label>
        <input type="text" name="string" id="string" required><br><br>
        <input type="submit" value="Xóa ký tự đặc biệt">
    </form>
</body>
</html>
