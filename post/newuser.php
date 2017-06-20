<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>注册</title>
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

				$check="SELECT `name` FROM `user` WHERE name='{$_POST['name']}'";
				mysql_query("SET NAMES 'gb2312'");
				$resultcheck=@mysql_query($check);
				$row1=mysql_fetch_array($resultcheck);

				if ($row1) {
					echo "<script>alert('该用户名已被注册!');location.href='newuser.php';</script>";
					exit();
				}

				$sql="INSERT INTO `user` (`ID`,`name`,`password`,`bank`) VALUES (NULL,'{$_POST['name']}',SHA1('{$_POST['password']}'),'1');";
				mysql_query("SET NAMES 'gb2312'");
				$result=@mysql_query($sql);

				if ($result) {
					echo "<h1>注册成功!<h1><br/>";
					echo "用户名为:{$_POST['name']}<br/>";
					echo "密码为:{$_POST['password']}<br/>"; 
					exit();

				}else{
					echo '<h1>系统错误，暂时无法注册。</h1><br/>';
					echo '<p>'.mysql_error(); 
					exit();
				}


			}else{
			
				foreach ($errors as $msg) {
				
					echo " - $msg<br/>\n";
					$errors=NULL;
				
				}
			}
		}
		?>
	</div>
	<form action="newuser.php" method="post">
		<div id="all">
			<p><b>账号：</b>
				<input type="text" name="name" size="20" maxlength="200"/><br/>
				<b>密码：</b>
				<input type="text" name="password" size="20" maxlength="200"/>
			</p>
		</div>
		<div align="center">
			<input type="submit" name="Submit" value="注册"/>
		</div>
	</form>
</body>