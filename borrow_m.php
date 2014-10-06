<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>borrowing</title>
</head>

<body>
<?php
	$equipmentId = $_POST["equipmentId"];
    $startTime = $_POST["startTime"];
   	$endTime = $_POST["endTime"];
	$id = $_SESSION["nowId"];
	
	if ((isset($_POST["equipmentId"]))  && (isset($_POST["startTime"])) && (isset($_POST["endTime"])))
	{
		date_default_timezone_set('Asia/Taipei');
		$nowTime = date("Y-m-d H:i:s");
		$id = $_SESSION["nowId"];
	
		@ $bool = mysql_pconnect('127.0.0.1','root');
		@ mysql_select_db('database-group11');
		@ mysql_set_charset('utf8');
		//沒被借過的
		@ $queryTotal = mysql_query("SELECT rent.rStime,rent.rEtime 
									FROM rent
									WHERE rent.eId = '$equipmentId'");
		$flag = true;
		$i=0;
		$j=1;
		$row = mysql_num_rows($queryTotal);
		if($row == '1')
		{
			$rEtime = mysql_result($queryTotal,$i,$j);
			$rStime = mysql_result($queryTotal,$i,$i);
			if(($rStime < $nowTime) && ($rEtime > $nowTime))
			{
				if($startTime < $rEtime)
				{
					$flag = false;
				}
			}
			else if(($rStime > $nowTime) && ($rEtime > $nowTime))
			{
				if($endTime > $rStime)
				{
					$flag = false;
				}
			}
		}
		else
		{
			for($i=0;$i<$row;$i++)
			{
				if($i%2 == 0)
				{
					$rEtime = mysql_result($queryTotal,$i,$j);
					$j = 0;
					if($rEtime > $startTime)
					{
						$flag = false;
						break;
					}
				}
				else if($i%2 == 1)
				{
					$rStime = mysql_result($queryTotal,$i,$j);
					$j = 1;
					if($rStime < $endTime)
					{
						$flag = false;
						break;
					}
				}
			}
		}
			
		if($flag)
		{
			@ $query = mysql_query("SELECT equipment.eId  
									FROM equipment 
									WHERE equipment.eId = '$equipmentId' AND (equipment.eName) NOT IN(SELECT equipment.eName 
																									  FROM rent JOIN equipment ON rent.eId = equipment.eId 
																									  WHERE rent.rStime <= '$nowTime' AND rent.rEtime >'$nowTime') ");
			//沒被借過的 future
			@ $queryFuture = mysql_query("SELECT equipment.eId 
										  FROM equipment 
										  WHERE equipment.eId = '$equipmentId' AND (equipment.eName) NOT IN(SELECT equipment.eName 
																									  FROM rent JOIN equipment ON rent.eId = equipment.eId 
																									  WHERE rent.rStime > '$nowTime' ) ");																						  																				  		
			if(($query != false) && ($queryFuture != false))
			{																	 
				$borrow = mysql_query("INSERT INTO rent VALUES('$equipmentId','$id','$startTime','$endTime')");
				if(!$borrow)
				{
					echo "ERROR";
				}
				else
				{
					?><br><br><br><br><br><br><br><br><br><br>
					<p align="center"><FONT size="7"><?php echo "有借了！";?></FONT></p><HR><?php
					header("Refresh:5;url=total.php");
				}
			}
			else
			{
				echo "此物品目前不可借..";
				header("Refresh:2;url=borrow.php");
			}
		}
		else
		{
			?><br><br><br><br><br><br><br><br><br><br>
			<p align="center"><FONT size="7"><?php echo "對不起親愛的不能借唷~";?></FONT></p><HR><?php
			header("Refresh:2;url=borrow.php");
		}
	}
	else
	{
		?><br><br><br><br><br><br><br><br><br><br>
		<p align="center"><FONT size="7"><?php echo "請輸入完整的資料唷~";?></FONT></p><HR><?php
		header("Refresh:2;url=borrow.php");
	}
?>

</body>
</html>