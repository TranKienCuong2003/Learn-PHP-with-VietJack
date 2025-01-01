<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa khoảng trống</title>
</head>
<body>
    <?php
        function removeSpaces($str) {
            return str_replace(' ', '', $str);
        }

        if (isset($_GET['string'])) {
            $string = $_GET['string'];
            $result = removeSpaces($string);
            echo "Chuỗi ban đầu: $string <br>";
            echo "Chuỗi sau khi xóa khoảng trống: $result";
        }
    ?>

    <form method="get">
        <label for="string">Nhập một chuỗi:</label>
        <input type="text" name="string" id="string" required><br><br>
        <input type="submit" value="Xóa khoảng trống">
    </form>
</body>
</html>
