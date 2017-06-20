<?php
	$hostname="********";
	$database="connect";
	$username1="connect";
	$password1="*******";
	$flag=@mysql_connect($hostname,$username1,$password1)OR die('连接数据库错误:'.mysql_error());

	@mysql_select_db($database)OR die('选择数据库错误:'.mysql_error());


?>