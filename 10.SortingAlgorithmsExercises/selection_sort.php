<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sắp xếp chọn (Selection Sort)</title>
</head>
<body>
    <?php
        function selectionSort($arr) {
            $n = count($arr);

            for ($i = 0; $i < $n - 1; $i++) {
                $minIndex = $i;

                for ($j = $i + 1; $j < $n; $j++) {
                    if ($arr[$j] < $arr[$minIndex]) {
                        $minIndex = $j;
                    }
                }

                if ($minIndex != $i) {
                    $temp = $arr[$i];
                    $arr[$i] = $arr[$minIndex];
                    $arr[$minIndex] = $temp;
                }
            }

            return $arr;
        }

        $array = [34, 7, 23, 32, 5, 62];
        $sortedArray = selectionSort($array);

        echo "Mảng ban đầu: " . implode(", ", $array) . "<br>";
        echo "Mảng sau khi sắp xếp: " . implode(", ", $sortedArray);
    ?>
</body>
</html>
