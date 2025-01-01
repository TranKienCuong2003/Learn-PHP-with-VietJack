<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo Bảng</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 18px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Hiển thị Chuỗi và Giá trị trong Bảng</h2>
    <?php
    $data = [
        ["Tên", "Trần Kiên Cường"],
        ["Tuổi", 21],
        ["Địa chỉ", "Hà Nội, Việt Nam"],
        ["Email", "trankiencuong30072003Z@gmail.com"]
    ];
    ?>
    <table>
        <tr>
            <th>Chỉ số</th>
            <th>Giá trị</th>
        </tr>
        <?php
        foreach ($data as $row) {
            echo "<tr>";
            echo "<td>{$row[0]}</td>";
            echo "<td>{$row[1]}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
