<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sắp xếp Shell Sort</title>
</head>
<body>
    <?php
        function shellSort($arr) {
            $n = count($arr);
            $gap = floor($n / 2);

            while ($gap > 0) {
                for ($i = $gap; $i < $n; $i++) {
                    $temp = $arr[$i];
                    $j = $i;

                    while ($j >= $gap && $arr[$j - $gap] > $temp) {
                        $arr[$j] = $arr[$j - $gap];
                        $j -= $gap;
                    }

                    $arr[$j] = $temp;
                }

                $gap = floor($gap / 2);
            }

            return $arr;
        }

        $array = [34, 7, 23, 32, 5, 62];
        $sortedArray = shellSort($array);

        echo "Mảng ban đầu: " . implode(", ", $array) . "<br>";
        echo "Mảng sau khi sắp xếp: " . implode(", ", $sortedArray);
    ?>
</body>
</html>
