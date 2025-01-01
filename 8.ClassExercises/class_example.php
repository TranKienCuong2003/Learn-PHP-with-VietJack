<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Example</title>
</head>
<body>
    <?php
        class ExampleClass {
            public function __construct() {
                echo "Class đã được khởi tạo";
            }
        }

        $obj = new ExampleClass();
    ?>
</body>
</html>
