<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chèn chuỗi vào vị trí</title>
</head>
<body>
    <?php
        $originalString = "Hello world, welcome!";
        $stringToInsert = "beautiful ";
        $position = 6;

        $newString = substr_replace($originalString, $stringToInsert, $position, 0);
        echo "Chuỗi sau khi chèn: $newString";
    ?>
</body>
</html>
