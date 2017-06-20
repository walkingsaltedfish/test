<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>买！</title>
	<style>
	#all{
		margin: 150px auto;
		width: 500px;
		height: 600px;

	}
	</style>
</head>
<body>
	<div id="all">
		<div align="center">
			<img src="images/yuebing.jpg"><br/><br/><br/>
		</div>
		
		<?php
		setcookie('ID','');
		setcookie('name','');
		setcookie('bank','');

		$num=1;
		echo '<select name="num">';
		while ( $num<= 10) {
			echo "<option value=\"$num\">$num</option>\n";
			$num++;
		}
		echo '</select>数量;单价100$';

		?>
		<div align="center">
		<h3>
			<a href="login.php">登陆</a>
			<a href="newuser.php">注册</a>
		</h3>
		</div>

	</div>

</body>

	

