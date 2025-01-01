<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sắp xếp nhanh (Quick Sort)</title>
</head>
<body>
    <?php
        function quickSort($arr) {
            if (count($arr) < 2) {
                return $arr;
            }

            $pivot = $arr[0];
            $left = $right = [];

            for ($i = 1; $i < count($arr); $i++) {
                if ($arr[$i] < $pivot) {
                    $left[] = $arr[$i];
                } else {
                    $right[] = $arr[$i];
                }
            }

            return array_merge(quickSort($left), [$pivot], quickSort($right));
        }

        $array = [34, 7, 23, 32, 5, 62];
        $sortedArray = quickSort($array);

        echo "Mảng ban đầu: " . implode(", ", $array) . "<br>";
        echo "Mảng sau khi sắp xếp: " . implode(", ", $sortedArray);
    ?>
</body>
</html>
