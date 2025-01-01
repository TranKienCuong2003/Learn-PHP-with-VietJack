<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sắp xếp trộn (Merge Sort)</title>
</head>
<body>
    <?php
        function mergeSort($arr) {
            if (count($arr) < 2) {
                return $arr;
            }

            $middle = floor(count($arr) / 2);
            $left = array_slice($arr, 0, $middle);
            $right = array_slice($arr, $middle);

            return merge(mergeSort($left), mergeSort($right));
        }

        function merge($left, $right) {
            $result = [];
            while (count($left) > 0 && count($right) > 0) {
                if ($left[0] < $right[0]) {
                    $result[] = array_shift($left);
                } else {
                    $result[] = array_shift($right);
                }
            }

            return array_merge($result, $left, $right);
        }

        $array = [34, 7, 23, 32, 5, 62];
        $sortedArray = mergeSort($array);

        echo "Mảng ban đầu: " . implode(", ", $array) . "<br>";
        echo "Mảng sau khi sắp xếp: " . implode(", ", $sortedArray);
    ?>
</body>
</html>
