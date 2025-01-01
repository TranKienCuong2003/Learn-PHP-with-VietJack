<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đổi màu kí tự đầu tiên của từ trong PHP</title>
</head>
<body>
    <?php
        $text = "Chào các bạn đến với bài tập PHP.";

        function changeFirstLetterColor($str) {
            $first_char = substr($str, 0, 1);
            
            $remaining_str = substr($str, 1);
            
            return "<span style='color: red;'>$first_char</span>" . $remaining_str;
        }

        $modified_text = changeFirstLetterColor($text);
        echo $modified_text;
    ?>
</body>
</html>