<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改物品資料</title>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript">
</script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<style type="text/css">
	#container{ width:1024px; height:auto; font-family:"微軟正黑體";
		}
	#header{ width:auto; height:auto; float:left;	
		}
	#sider{ clear:both; width:auto; height:auto; float:right; margin-top:5px;
		}
	#content{ width:900px; height:auto; float:left;
		}
	#footer{ clear:both;
		}
	a{ text-decoration:none;}

</style>
</head>

<body>
<center>
    <div id="container">
        <div id="header"><img src="path.jpg" width=1024px;  />
        <br /><br /><br />
        </div>

        <div id="sider">
        	<table border="1px" cellspacing="0" width="90px" style="font-size:16px; text-align:center" bordercolor="#FF0000">
            	<a href="logout.php"><font size="+2" color="#FF0000"> 登出</font></a>
            </table>
            <br/>
        	<font size="+1">&nbsp;聯絡我們</font><br/><br/>
        	<table border="1px" cellspacing="0" width="120px" style="font-size:16px; text-align:center">
  				<tr>
    				<td><img src="picture/1378581_528421693903015_557834180_n.jpg" width="114px" height="114px" align="top" />
    					<p>職位 : 場器長</p>
   					 	<p>系級 : 105級</p>
    					<p>姓名 : <a href="https://www.facebook.com/he.r.huang.1"; target=_blank; style="color:#00F">黃河榮</a></p>
				  </td>
				</tr>
  				<tr>
   					<td ><img src="picture/268081_103286769768169_7429595_n.jpg" width="114px" height="114px" alt="丞崇寧頭貼" />
                    	<p>職位 : 場器長</p>
    					<p>系級 : 105級</p>
    					<p>姓名 : <a href="https://www.facebook.com/profile.php?id=100002605394257
					"; target=_blank; style="color:#00F">程崇寧</a></p>
</td>
  </tr>
  </table>
        </div>

        <div id="content">
			<ul id="MenuBar1" class="MenuBarHorizontal">
           		<li><a class="MenuBarItemSubmenu">會員管理</a>
                	<ul>
						<li><a href="totalMember.php">會員總覽</a></li>
						<li><a href="addMember.php">新增會員</a></li>
						<li><a href="deleteMember.php">刪除會員</a></li>
						<li><a href="updateMember.php">修改會員資料</a></li>
					</ul>
                </li>
                
                <li><a class="MenuBarItemSubmenu">物品管理</a>
                	<ul>
						<li><a href="totalEquipment.php">物品總覽</a></li>
						<li><a href="addEquipment.php">新增物品</a></li>
						<li><a href="deleteEquipment.php">刪除物品</a></li>
                        <li><a href="updateEquipment.php">修改物品資料</a></li>
					</ul>
                </li>
                
                <li><a class="MenuBarItemSubmenu">留言管理</a>
                	<ul>
						<li><a href="totalArticle.php">留言總覽</a></li>
						<li><a href="deleteArticle.php">刪除留言</a></li>
					</ul>
                </li>
        
			</ul>
			<script type="text/javascript">
			var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
			</script>
            <div><br><br><br>
            修改資料
            <P>
           <form action="updateEquipment.php" method="post">
            
            編號:<input name="eId" type="text" ><br>
            分類:<select name="pId">
            	<option>博碩文化股份有限公司</option>
                <option>旗標出版股份有限公司</option>
                <option>普林斯頓國際有限公司</option>
                <option>文鶴出版有限公司</option>
                <option>爾雅出版社有限公司</option>
                <option>泰甫電腦資訊有限公司</option>
                <option>鼎新電腦股份有限公司</option>
                <option>愛國百貨股份有限公司</option>
                <option>小北百貨有限公司</option>
                </select><br>
            分類:<select name="class">
            	<option>書</option>
                <option>電腦</option>
                <option>會議室</option>
                <option>電器</option>
                <option>音效設備</option>
                <option>日常設備</option>
                </select><br>
            名稱:<input name="name" type="text"><br>
            <input type="submit" action="addMember.php" method="POST" value="送出" style="margin:10px auto;">
            <input type="reset" />
           
            </form>
			</p>
            
            <?php	
				@ $bool = mysql_pconnect('127.0.0.1','group11','group11');
				@ mysql_select_db('group11');
				@ mysql_set_charset('utf8');
				
				if(isset($_POST["eId"]))
				{
					$eId = $_POST["eId"];
					@ $data = mysql_query("SELECT pId,cId,eName
										   FROM `equipment`
										   WHERE eId = '$eId'");
					$i = 0;
					$j = 0;
					$pId = mysql_result($data,$i,$j);
					$j++;
					$class = mysql_result($data,$i,$j);
					$j++;
					$eName =  mysql_result($data,$i,$j);
					
					if($_POST["pId"] != NULL)
					{
						$pId =  $_POST["pId"];
						if($pId == "博碩文化股份有限公司")
						{
							$pId = "P0001";
						}
						else if($pId == "旗標出版股份有限公司")
						{
							$pId = "P0002";
						}
						else if($pId == "普林斯頓國際有限公司")
						{
							$pId = "P0003";
						}
						else if($pId == "文鶴出版有限公司")
						{
							$pId = "P0004";
						}
						else if($pId == "爾雅出版社有限公司")
						{
							$pId = "P0005";
						}
						else if($pId == "泰甫電腦資訊有限公司")
						{
							$pId = "P0006";
						}
						else if($pId == "鼎新電腦股份有限公司")
						{
							$pId = "P0007";
						}
						else if($pId == "愛國百貨股份有限公司")
						{
							$pId = "P0008";
						}
						else if($class == "小北百貨有限公司")
						{
							$pId = "P0009";
						}
					}
						
					if(isset($_POST["class"]))
					{
						$class = $_POST["class"];
						if($class == "書")
						{
							$class =  "C0001";
						}
						else if($class == "電腦")
						{
							$class =  "C0002";
						}
						else if($class == "會議室")
						{
							$class =  "C0003";
						}
						else if($class == "電器")
						{
							$class =  "C0004";
						}
						else if($class == "音效設備")
						{
							$class =  "C0005";
						}
						else if($class == "日常設備")
						{
							$class =  "C0006";
						}
					}
					
					if($_POST["name"] != NULL)
					{
						$name = $_POST["name"];
					}
					
					date_default_timezone_set('Asia/Taipei');
					$nowTime = date("Y-m-d H:i:s");

					if((isset($_POST["eId"])))
					{
						@ $query = mysql_query("UPDATE `group11`.`equipment` SET `pId` = '$pId', `cId` = '$class', `eName` = '$name' WHERE `equipment`.`eId` = '$eId'");
						
						if($query)
						{
							header("Location:totalEquipment.php");
						}
						else
						{
							echo "請重新輸入";
						}
					}
					else
					{
						echo "請重新輸入";
					}
				}

					?></table><?php
				?><br><br>
        <div id="footer">
        	<br />        	
            <hr size="2" color="#999999"/>
        </div>
    </div>
</center>
</body>
</html>

