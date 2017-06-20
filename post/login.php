<html>
<head>
	<meta http-equiv="Content-Type" content="text/xml; charset=utf-8"/>
	<title>登陆</title>
	<style>
	#all{
		margin: 50px auto;
		width: 300px;
		height: 100px;

	}
	</style>
</head>
<body>
	<div id="all">
		<?php
		if (isset($_POST['Submit'])) {
			$errors=array();
			if (empty($_POST['name'])) {
				$errors[]='请输入用户名';
			}
			if (empty($_POST['password'])) {
				$errors[]='请输入密码';
			}
				if (empty($errors)) {
				include_once("./connect.php");

				$sql="SELECT `ID`,`name`,`bank` FROM `user` WHERE (name='{$_POST['name']}' AND password=SHA1('{$_POST['password']}'));";
				mysql_query("SET NAMES 'gb2312'");
				$result=@mysql_query($sql);
				$row=mysql_fetch_array($result);
				if ($row) {
					setcookie('ID',$row[0]);
					setcookie('name',$row[1]);
					setcookie('bank',$row[2]);
					$url='logied.php';
					header("Location:$url");
					exit();
				}else{

					echo"抱歉,账号或密码错误";
				}


			}else{
				echo"抱歉，";
				foreach ($errors as $msg) {
				
					echo " - $msg<br/>\n";
	
				
				}
				$errors[]=NULL;
			}

		}
		?>
	</div>
	<form action="login.php" method="post">
		<div id="all">
			<p><b>账号：</b>
				<input type="text" name="name" size="20" maxlength="20"/><br/>
				<b>密码：</b>
				<input type="text" name="password" size="20" maxlength="20"/>
			</p>
		</div>
		<div align="center">
			<input type="submit" name="Submit" value="登陆"/>
		</div>
	</form>
</body>
</html>
