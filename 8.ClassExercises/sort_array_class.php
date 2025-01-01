<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sắp xếp mảng số nguyên</title>
</head>
<body>
    <?php
        class SortArray {
            public function sortArray($array) {
                sort($array);
                return $array;
            }
        }

        $numbers = [5, 3, 8, 1, 4, 9, 2];
        $sorter = new SortArray();
        $sortedArray = $sorter->sortArray($numbers);

        echo "Mảng sau khi sắp xếp: " . implode(", ", $sortedArray);
    ?>
</body>
</html>
