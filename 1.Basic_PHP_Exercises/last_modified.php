<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Last Modified</title>
</head>
<body>
    <h2>Thông tin Chỉnh sửa Lần Cuối của File</h2>
    <?php
    $file = "C:\Workplace\PHP\Learn-PHP-with-VietJack\CONTRIBUTING.md";

    if (file_exists($file)) {
        $last_modified = filemtime($file);
        echo "<p>File '$file' được chỉnh sửa lần cuối vào: " . date("d-m-Y H:i:s", $last_modified) . "</p>";
    } else {
        echo "<p>File không tồn tại.</p>";
    }
    ?>
</body>
</html>
