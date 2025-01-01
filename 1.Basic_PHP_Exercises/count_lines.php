<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đếm Số Dòng trong File</title>
</head>
<body>
    <h2>Đếm Số Dòng trong File</h2>
    <?php
    $file = "C:\Workplace\PHP\Learn-PHP-with-VietJack\CODE_OF_CONDUCT.md";
    if (file_exists($file)) {
        $handle = fopen($file, "r");
        if ($handle) {
            $line_count = 0;
            while (!feof($handle)) {
                fgets($handle);
                $line_count++;
            }
            fclose($handle);
            echo "<p>File '$file' có tổng cộng $line_count dòng.</p>";
        } else {
            echo "<p>Không thể mở file để đọc.</p>";
        }
    } else {
        echo "<p>File không tồn tại.</p>";
    }
    ?>
</body>
</html>
