<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<?php
	@ $bool = mysql_pconnect('127.0.0.1','group11','group11');
	@ mysql_select_db('group11');
	@ mysql_set_charset('utf8');
		$sId = $_POST["username"];
		$password = $_POST["password"];
		$managerId = "B0024";
		$managerId2 = "B0010";
		if( ((strcmp($sId,$managerId)) != 0) && ((strcmp($sId,$managerId2)) != 0))
		{
			echo "帳號或密碼錯誤";
		}
		else
		{
			$query = mysql_query("SELECT sName
						      	  FROM student                                           
							  	  WHERE sId='$sId' AND sPassword='$password' ");
			$_SESSION["nowId"] = $sId;
			$name = mysql_result($query,0,0);
			?><br><br><br><br><br><br><br><br><br><br>
       	 	<p align="center"><FONT size="7"><?php echo "Welcome!管理員";?></FONT></p><HR>
			<p align="center"><FONT size="6"><?php echo "$name";?></FONT></p><?php 
			header("Refresh:2;url=manager.php");
		}
?>
</body>
</html>