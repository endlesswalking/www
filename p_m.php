<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>poing..</title>
</head>

<body>
<?php
	$content = $_POST["content"];
	$id = $_SESSION["nowId"];
	$bId = $_POST["bId"];
	if($bId == "書本公告版")
		$bId = "BB001";
	else if($bId == "電腦公告版")
		$bId = "BB002";
	else if($bId == "會議室公告版")
		$bId = "BB003";
	else if($bId == "電器類公告版")
		$bId = "BB004";
	else if($bId == "音效設備公告版")
		$bId = "BB005";	
	else if($bId == "日常用品公告版")
		$bId = "BB006";
	else
	{
		echo "請重新輸入";
		header("Refresh:2;url=pBook.php");
	}
		
	
	if ((isset($_SESSION["nowId"]))  && (isset($_POST["content"])))
	{
		date_default_timezone_set('Asia/Taipei');
		$nowTime = date("Y-m-d H:i:s");
		
		@ $bool = mysql_pconnect('127.0.0.1','group11','group11');
		@ mysql_select_db('group11');
		@ mysql_set_charset('utf8');
		@ $query = mysql_query("SELECT aId FROM `article` ");
		
		$row = (mysql_num_rows($query));
		$tmp = 0;
		for($i=0;$i<$row;$i++)
		{
			$newId = (mysql_result($query,$i,0));
			$newId = substr($newId,1,4);
			$int = (int) $newId;
			if($int > $tmp)
			{
				$tmp = $int;
			}
		}
		$int = $tmp+1;
		if($int > 9)
		{
			$newId = "A00".$int;
			echo $newId;
		}
		else if($int > 99)
		{
			$newId = "A0".$int;
		}
		else if($int >999)
		{
			$newId = "A".$int;
		}
		else 
		{
			$newId = "A000".$int;
		}
		
		echo "$newId"." . ";
		echo "$bId"." . ";
		echo "$id"." . ";
		echo "$content"." . ";
		echo "$nowTime"." . ";
		
		$borrow = mysql_query("INSERT INTO article VALUES('$newId','$bId','$id','$content','$nowTime')");
		if($borrow == true)
		{
			header("Location:index.html");
		}
		else
		{
			echo "error";
		}
	}
?>
		 
</body>
</html>