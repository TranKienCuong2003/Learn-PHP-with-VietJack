<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đếm kí tự trong chuỗi</title>
</head>
<body>
    <?php
        if (isset($_GET['string']) && isset($_GET['char'])) {
            $string = $_GET['string'];
            $char = $_GET['char'];
            $count = substr_count($string, $char);
            echo "Ký tự '$char' xuất hiện $count lần trong chuỗi '$string'.";
        }
    ?>
    <form method="get">
        <label for="string">Nhập chuỗi:</label>
        <input type="text" name="string" id="string" required><br><br>
        <label for="char">Nhập ký tự cần đếm:</label>
        <input type="text" name="char" id="char" maxlength="1" required><br><br>
        <input type="submit" value="Đếm ký tự">
    </form>
</body>
</html>
