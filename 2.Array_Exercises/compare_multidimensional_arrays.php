<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>So Sánh Mảng Đa Chiều</title>
</head>
<body>
    <h2>So Sánh Hai Mảng Đa Chiều Và Trả Về Sự Khác Nhau</h2>
    <?php
    $array1 = [
        "fruit" => ["apple", "banana", "cherry"],
        "vegetable" => ["carrot", "broccoli"]
    ];

    $array2 = [
        "fruit" => ["apple", "banana", "grape"],
        "vegetable" => ["carrot", "spinach"]
    ];

    function compare_arrays($array1, $array2) {
        $difference = [];

        $difference['added'] = array_diff_recursive($array2, $array1);
        $difference['removed'] = array_diff_recursive($array1, $array2);

        return $difference;
    }

    function array_diff_recursive($array1, $array2) {
        $result = [];

        foreach ($array1 as $key => $value) {
            if (is_array($value)) {
                if (!isset($array2[$key])) {
                    $result[$key] = $value;
                } else {
                    $recursive_diff = array_diff_recursive($value, $array2[$key]);
                    if (!empty($recursive_diff)) {
                        $result[$key] = $recursive_diff;
                    }
                }
            } else {
                if (!isset($array2[$key]) || $array2[$key] != $value) {
                    $result[$key] = $value;
                }
            }
        }

        return $result;
    }

    $diff = compare_arrays($array1, $array2);

    echo "<p>Phần tử được thêm vào trong mảng 2:</p>";
    echo "<pre>";
    print_r($diff['added']);
    echo "</pre>";

    echo "<p>Phần tử bị xóa khỏi mảng 1:</p>";
    echo "<pre>";
    print_r($diff['removed']);
    echo "</pre>";
    ?>
</body>
</html>
