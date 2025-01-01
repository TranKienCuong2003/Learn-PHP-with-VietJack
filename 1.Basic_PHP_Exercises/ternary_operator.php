<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toán Tử Tam Phân</title>
</head>
<body>
    <h2>Kiểm Tra Số Với Toán Tử Tam Phân</h2>
    <?php
        function toan_tu_tam_phan($n){  
        $r = $n > 20 
        ? "lớn hơn 20"  
        : ($n > 15  
        ? "lớn hơn 15"  
        : ($n >10  
        ? "lớn hơn 10"  
        : "Số vừa nhập là nhỏ hơn 10"));   
        echo $n." : ".$r."<br>";  
        }  
        toan_tu_tam_phan(42);  
        toan_tu_tam_phan(21);  
        toan_tu_tam_phan(12);  
        toan_tu_tam_phan(5);
    ?>
</body>
</html>
