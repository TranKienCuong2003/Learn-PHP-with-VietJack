<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lấy từ đầu tiên</title>
</head>
<body>
    <?php
        $sentence = "Hello world, welcome to PHP!";
        $firstWord = strtok($sentence, ' ');
        echo "Từ đầu tiên trong câu: $firstWord";
    ?>
</body>
</html>
