<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form đăng nhậpnhập</title>
</head>
<body>
<form method='POST'> 
       <h2>Nhập tên đăng nhập:</h2>
	   <input type="text" name="ten_dang_nhap"> 
       <input type="submit" value="Đăng nhập"> 
       </form>
       <?php
		$name = $_POST['ten_dang_nhap'];  
		echo "<h3>Chúc mừng $name đã đăng nhập thành công!</h3>";  
	?>
</body>
</html>