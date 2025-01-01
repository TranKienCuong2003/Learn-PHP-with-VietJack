<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa ký tự không phải là số</title>
</head>
<body>
    <?php
        function removeNonNumeric($str) {
            return preg_replace('/[^0-9.,]/', '', $str); // Xóa tất cả các ký tự không phải số, dấu phẩy và dấu chấm
        }

        if (isset($_GET['string'])) {
            $string = $_GET['string'];
            $result = removeNonNumeric($string);
            echo "Chuỗi ban đầu: $string <br>";
            echo "Chuỗi sau khi xóa ký tự không phải số: $result";
        }
    ?>

    <form method="get">
        <label for="string">Nhập một chuỗi:</label>
        <input type="text" name="string" id="string" required><br><br>
        <input type="submit" value="Xóa ký tự không phải số">
    </form>
</body>
</html>
