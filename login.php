
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="300; URL=index.html" />
<title>中山資管系休租借系統</title>
<style type="text/css">
#login{height:300px; width:400px; border:solid; border:10;  border-color:#000;}
a{ text-decoration:none; color:#000000; cursor:default;}
 
</style>
</head>

<body>
<center>
	<div id="container">
﻿		<div id="header">
		</div>
		<div id="main">
			<div id="login">
            	<br />
            	<table border="2" cellspacing="0" cellpadding="5">
                    <tr>
                    	<td>
                    		<a href="login.php">一般會員登入</a>
                        </td>
                        <td style="position:relative;bottom:1px;left:1px;">
                    		<a href="login_manager.php">管理員登入</a>
                    	</td>
                    </tr>
            	</table>
                    <br />
                    <br />
            		歡迎使用系休租借系統
                	<form action="login_s.php" method="POST">
						<div>帳號 : <input type="text" name="username"  style="margin:20px 0 10px 0;"></div>
						<div>密碼 : <input type="password" name="password" style="margin:10px 0 10px 0;"></div>
						<div><input type="submit" action="login.php" method="POST" value="Login" style="margin:10px auto;"></div>
					</form>
            </div>
        </div>
	</div>
</center>
</body>
</html>
