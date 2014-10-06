 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
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
      			<li><a href="index.html">租借說明</a></li>
                <li><a class="MenuBarItemSubmenu">公告欄</a>
					<ul>
						<li><a href="bBook.html">書</a></li>
						<li><a href="bComputer.html">電腦</a></li>
						<li><a href="bMeeting.html">會議室</a></li>
						<li><a href="bElectric.html">電器</a></li>
						<li><a href="bMusic.html">音樂設備</a></li>
						<li><a href="bLife.html">生活用品</a></li>
					</ul>
				</li>
				<li><a class="MenuBarItemSubmenu">物品動態</a>
					<ul>
						<li><a href="tBook.html">書</a></li>
						<li><a href="tComputer.html">電腦</a></li>
						<li><a href="tMeeting.html">會議室</a></li>
						<li><a href="tElectric.html">電器</a></li>
						<li><a href="tMusic.html">音樂設備</a></li>
						<li><a href="tLife.html">生活用品</a></li>
					</ul>
				</li>
				<li><a class="MenuBarItemSubmenu">我要借東西</a>
					<ul>
						<li><a href="boBook.html">書</a></li>
						<li><a href="boComputer.html">電腦</a></li>
						<li><a href="boMeeting.html">會議室</a></li>
						<li><a href="boElectric.html">電器</a></li>
						<li><a href="boMusic.html">音樂設備</a></li>
						<li><a href="boLife.html">生活用品</a></li>
					</ul>
				</li>
				<li><a class="MenuBarItemSubmenu">我要po文</a>
					<ul>
						<li><a href="pBook.html">書</a></li>
						<li><a href="pComputer.html">電腦</a></li>
						<li><a href="pMeeting.html">會議室</a></li>
						<li><a href="pElectric.html">電器</a></li>
						<li><a href="pMusic.html">音樂設備</a></li>
						<li><a href="pLife.html">生活用品</a></li>
					</ul>
				</li>
                <li><a href="record.html">我的記錄</a></li>
				<li><a href="provider.php">供應商資訊</a></li>
			</ul>
			<script type="text/javascript">
			var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
			</script>
            <br /><br /><br />
            
            <form method="post" action="p_m.php">
                <p>留言:</p>
                <p><input size="60" type="text" name="content" value="想說些什麼..." /></p>
                <p>在哪一個版:</p>
                <p><select name="bId"> 
                	<option selected>請選擇留言版</option>
               		<option>書本公告版</option>
                    <option>電腦公告版</option>
                    <option>會議室公告版</option>
                    <option>電器類公告版</option>
                    <option>音效設備公告版</option>
                    <option>日常用品公告版</option>
                    </select></p><br>
                <input type="submit" value="送出" />
                <input type="reset" value="重設" />
            </form>
        </div>

        <div id="footer">
        	<br />        	
            <hr size="2" color="#999999"/>
        </div>
    </div>
</center>
</body>
</html>
