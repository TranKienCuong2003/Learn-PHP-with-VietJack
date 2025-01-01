<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class với thuộc tính và phương thức</title>
</head>
<body>
    <?php
        class MyClass {
            public $greeting;

            public function __construct($greeting) {
                $this->greeting = $greeting;
            }

            public function sayHello() {
                echo $this->greeting;
            }
        }

        $obj = new MyClass("Xin chào, đây là phương thức sayHello!");
        $obj->sayHello();
    ?>
</body>
</html>
