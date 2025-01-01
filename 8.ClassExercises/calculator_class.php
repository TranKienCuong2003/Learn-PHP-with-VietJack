<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Máy tính đơn giản</title>
</head>
<body>
    <?php
        class Calculator {
            public function add($a, $b) {
                return $a + $b;
            }

            public function subtract($a, $b) {
                return $a - $b;
            }

            public function multiply($a, $b) {
                return $a * $b;
            }

            public function divide($a, $b) {
                if ($b == 0) {
                    return "Không thể chia cho 0!";
                }
                return $a / $b;
            }
        }

        $calc = new Calculator();
        $a = 10;
        $b = 5;

        echo "Cộng: " . $calc->add($a, $b) . "<br>";
        echo "Trừ: " . $calc->subtract($a, $b) . "<br>";
        echo "Nhân: " . $calc->multiply($a, $b) . "<br>";
        echo "Chia: " . $calc->divide($a, $b) . "<br>";
    ?>
</body>
</html>
