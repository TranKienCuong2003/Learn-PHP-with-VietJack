<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sắp xếp chèn (Insertion Sort)</title>
</head>
<body>
    <?php
        function insertionSort($arr) {
            for ($i = 1; $i < count($arr); $i++) {
                $key = $arr[$i];
                $j = $i - 1;

                while ($j >= 0 && $arr[$j] > $key) {
                    $arr[$j + 1] = $arr[$j];
                    $j--;
                }
                $arr[$j + 1] = $key;
            }

            return $arr;
        }

        $array = [34, 7, 23, 32, 5, 62];
        $sortedArray = insertionSort($array);

        echo "Mảng ban đầu: " . implode(", ", $array) . "<br>";
        echo "Mảng sau khi sắp xếp: " . implode(", ", $sortedArray);
    ?>
</body>
</html>
