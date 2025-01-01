<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bàn cờ</title>
    <style>
        table {
            border-collapse: collapse;
            width: 400px;
            height: 400px;
        }
        td {
            width: 50px;
            height: 50px;
        }
        .black {
            background-color: black;
        }
        .white {
            background-color: white;
        }
    </style>
</head>
<body>
    <table>
        <?php
            for ($row = 0; $row < 8; $row++) {
                echo "<tr>";
                for ($col = 0; $col < 8; $col++) {
                    $class = ($row + $col) % 2 == 0 ? 'white' : 'black';
                    echo "<td class='$class'></td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
