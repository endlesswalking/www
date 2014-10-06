<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登出</title>
</head>

<body>

<?php
unset($_SESSION['nowId']);
echo '<script type="text/javascript">
					alert("成功登出!")
			 </script>';
echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';
?>
</body>
</html>