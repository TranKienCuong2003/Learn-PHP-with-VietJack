<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sắp xếp nổi bọt (Bubble Sort)</title>
</head>
<body>
    <?php
        function bubbleSort($arr) {
            $n = count($arr);
            for ($i = 0; $i < $n - 1; $i++) {
                for ($j = 0; $j < $n - $i - 1; $j++) {
                    if ($arr[$j] > $arr[$j + 1]) {
                        $temp = $arr[$j];
                        $arr[$j] = $arr[$j + 1];
                        $arr[$j + 1] = $temp;
                    }
                }
            }

            return $arr;
        }

        $array = [34, 7, 23, 32, 5, 62];
        $sortedArray = bubbleSort($array);

        echo "Mảng ban đầu: " . implode(", ", $array) . "<br>";
        echo "Mảng sau khi sắp xếp: " . implode(", ", $sortedArray);
    ?>
</body>
</html>
