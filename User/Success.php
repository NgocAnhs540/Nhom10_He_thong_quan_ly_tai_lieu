<!DOCTYPE html>
<html>
<head>
<title>Thành công</title>
<link rel="stylesheet" href="../css/login.css">
</head>
<body>
<div id="wrap">
<div id="header">
<div id="logo">
    <h1 style="text-align: center;"><span style="color:green">Thông báo</span></h1>  
</div>
</div>

<div id="content">
    
    <h1 style="margin-left: 5em;">Thành công</h1>
    <h2 style="color: green">Bạn đã thành công đăng ký người dùng mới</h2>
    
</div>

<div class= "clear"></div>

<div id="footer">
&copy;Nhóm 10
</div>
</div>
</body>
</html>
<?php
    $loc = "../";
					
	echo '<script> 
	
	function refPage() {
		var loc = "'.$loc.'";
		document.location = loc;
	}
	
	setInterval(\'refPage()\', 2000);
	
	</script>';
?>