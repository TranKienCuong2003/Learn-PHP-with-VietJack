<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Giai Thừa</title>
</head>
<body>
    <?php
        class Factorial {
            public function calculate($number) {
                if ($number < 0) {
                    return "Số phải là một số nguyên dương.";
                }
                $result = 1;
                for ($i = 1; $i <= $number; $i++) {
                    $result *= $i;
                }
                return $result;
            }
        }

        $factorial = new Factorial();
        $number = 5;
        echo "Giai thừa của $number là: " . $factorial->calculate($number);
    ?>
</body>
</html>
