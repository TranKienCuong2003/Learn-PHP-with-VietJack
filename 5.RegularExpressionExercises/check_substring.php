<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm tra chuỗi con</title>
</head>
<body>
    <?php
        function containsSubstring($str, $substring) {
            return preg_match("/$substring/", $str) ? true : false;
        }

        if (isset($_GET['string']) && isset($_GET['substring'])) {
            $string = $_GET['string'];
            $substring = $_GET['substring'];

            if (containsSubstring($string, $substring)) {
                echo "Chuỗi '$substring' có trong chuỗi '$string'.";
            } else {
                echo "Chuỗi '$substring' không có trong chuỗi '$string'.";
            }
        }
    ?>

    <form method="get">
        <label for="string">Nhập chuỗi chính:</label>
        <input type="text" name="string" id="string" required><br><br>

        <label for="substring">Nhập chuỗi con:</label>
        <input type="text" name="substring" id="substring" required><br><br>

        <input type="submit" value="Kiểm tra">
    </form>
</body>
</html>
