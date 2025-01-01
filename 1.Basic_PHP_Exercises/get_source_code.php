<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lấy Source Code</title>
</head>
<body>
    <h2>Source Code của Trang Web</h2>
    <?php
    $url = "https://github.com/TranKienCuong2003/";

    $source_code = file_get_contents($url);

    if ($source_code !== false) {
        echo "<pre>" . htmlspecialchars($source_code) . "</pre>";
    } else {
        echo "<p>Không thể lấy source code từ URL đã cho.</p>";
    }
    ?>
</body>
</html>
