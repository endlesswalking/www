<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<?php
	 @ $bool = mysql_pconnect('127.0.0.1','group11','group11');
	 @ mysql_select_db('-group11');
	 @ mysql_set_charset('utf8');
	 $sId = $_POST["username"];
	 $password = $_POST["password"];
	 $query = mysql_query("SELECT sName
				            FROM student                                           
							WHERE sId='$sId' AND sPassword='$password' "); 
	$flag = mysql_num_rows($query);
	if($flag == 0)
	{?>
    	<table> 
		<TR><br><br><br><br><br><br>
		  <td>　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　 <?php echo "登入失敗";?></tr></td>
        <TR><td>　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　<?php echo "可能是帳號或密碼打錯了...";?></tr></td>
        <TR><td>                                   <?php echo "";?></tr></td>
        <TR><td>                                   <?php echo "";?></tr></td>
        <TR><td>                                   <?php echo "";?></tr></td>
        <TR><td>                                   <?php echo "";?></tr></td>
        <TR><td>　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　<?php echo "如果還是不行請聯繫管理員";?></tr></td>
        </table>
        <?php
        header("Refresh:4;url=login.php");
	}
	else
	{
		$_SESSION["nowId"] = $sId;
		$name = mysql_result($query,0,0);
		?><br><br><br><br><br><br><br><br><br><br>
        <p align="center"><FONT size="7"><?php echo "Welcome";?></FONT></p><HR>
		   <p align="center"><FONT size="6"><?php echo "$name";?></FONT></p><?php 
		header("Refresh:2;url=index.html");
	}
?>
</body>
</html>