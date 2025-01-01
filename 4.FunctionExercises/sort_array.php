<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sắp xếp mảng</title>
</head>
<body>
    <?php
        function sortArray($arr) {
            sort($arr);
            return $arr;
        }

        if (isset($_GET['array'])) {
            $arrayStr = $_GET['array'];
            $array = explode(",", $arrayStr);
            $sortedArray = sortArray($array);
            echo "Mảng ban đầu: " . implode(", ", $array) . "<br>";
            echo "Mảng sau khi sắp xếp: " . implode(", ", $sortedArray);
        }
    ?>

    <form method="get">
        <label for="array">Nhập mảng (các phần tử cách nhau bằng dấu phẩy):</label>
        <input type="text" name="array" id="array" required><br><br>
        <input type="submit" value="Sắp xếp mảng">
    </form>
</body>
</html>
